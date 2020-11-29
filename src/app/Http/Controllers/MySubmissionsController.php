<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Mongo_subs;
use App\Models\Submission;
use App\Models\User;
use App\Models\UsersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MySubmissionsController extends Controller
{
    public function index(){
        $myUserInfo = UsersInfo::where('AuthenticationID', Auth::user()->id)->get();
        if (count($myUserInfo) == 0)
            $mySubmissions = [];
        else {
            $myName = $myUserInfo[0]->Name;
            $mySubmissions = Mongo_subs::where('submitted_by', $myName)->get();
        }
        return view('submissions.index', [
            'submissions' => $mySubmissions
        ]);
    }

    public function delete(Mongo_subs $submission){
        $submission->delete();
        return redirect()->route('dashboard');
    }

    public function edit(Mongo_subs $submission){
        $users = UsersInfo::get();
        $keywords = Mongo_subs::where('submission_id', $submission->submission_id)->get()->toArray()[0]['keywords'];
        $keywordsCommaSeperated = "";
        foreach ($keywords as $keyword){
            $keywordsCommaSeperated .= $keyword . ", ";
        }
        $keywordsCommaSeperated = rtrim($keywordsCommaSeperated, ", ");
        return view('submissions.edit', [
            'submission' => $submission,
            'keywords' => $keywordsCommaSeperated,
            'users' => $users
        ]);
    }

    public function edit2(Request $request, Mongo_subs $submission)
    {
        $submission->status = 'Modified';
        $submission->save();

        $submissionsCount = Mongo_subs::where('ConfID', $submission->ConfID)->get()->count() + 1;
        $modifiedSubmission = new Mongo_subs();
        $modifiedSubmission->submission_id = $submission->ConfID . "_" . $submissionsCount;
        $modifiedSubmission->prev_submission_id = $submission->submission_id;
        $modifiedSubmission->ConfID = $submission->ConfID;
        $newKeywords = explode(", ", $request['keywords']);
        $modifiedSubmission->keywords = $newKeywords;
        $modifiedSubmission->title = $request['title'];
        $modifiedSubmission->abstract = $request['abstract'];

        $authors = [];
        foreach ($request['author'] as $author) {
            $spaceIndex = strpos($author, ' ');
            $name = substr($author, 0, $spaceIndex);
            $userInfo = UsersInfo::where('Name', 'like', '%' . $name . '%')->get()[0];
            $user = User::where('id', $userInfo->AuthenticationID)->get()[0];
            $countryName = Country::where('CountryCode', $userInfo->CountryCode)->get()[0];
            $authorDetail = [
                'authenticationID' => $userInfo->AuthenticationID,
                'name' => $userInfo->Name . " " . $userInfo->LastName,
                'email' => $user->email,
                'affil' => $userInfo->Affiliation,
                'country' => $countryName->CountryName
            ];
            array_push($authors, $authorDetail);
        }

        $modifiedSubmission->authors = $authors;
        $modifiedSubmission->submitted_by = $request['submitted_by'];
        $modifiedSubmission->corresponding_author = $request['corresponding_author'];
        $modifiedSubmission->type = $request['type'];
        $modifiedSubmission->active = $request['active'];
        $modifiedSubmission->status = 'Modified';
        $modifiedSubmission->submission_date_time = date('Y-m-d H:i:s');

        $modifiedSubmission->save();

        /* Create Submission for MySQL. */
        $mysqlSubmission = new Submission();

        $user = UsersInfo::where('Name', $request['submitted_by'])->get()[0];
        $mysqlSubmission->AuthenticationID = $user->AuthenticationID;
        $mysqlSubmission->ConfID = $submission->ConfID;
        $mysqlSubmission->submission_id = $submission->ConfID . "_" . $submissionsCount;
        $mysqlSubmission->prev_submission_id = $submission->submission_id;

        $mysqlSubmission->save();

        return redirect('dashboard');
    }

    public function inactivate(Mongo_subs $submission){
        $allSubmissions = Mongo_subs::where('prev_submission_id', $submission->submission_id)->get();
        foreach ($allSubmissions as $allSubmission){
            $allSubmission->active = 'No';
            $allSubmission->save();
        }
        $submission->active = 'No';
        $submission->save();
        return redirect('dashboard');
    }

    public function recover(Mongo_subs $submission){
        $allSubmissions = Mongo_subs::where('prev_submission_id', $submission->submission_id)->get();
        foreach ($allSubmissions as $allSubmission){
            $allSubmission->active = 'Yes';
            $allSubmission->save();
        }
        $submission->active = 'Yes';
        $submission->save();
        return redirect('dashboard');
    }
}
