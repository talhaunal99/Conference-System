<?php

namespace App\Http\Controllers;

use App\Models\Mongo_subs;
use App\Models\UsersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MySubmissionsController extends Controller
{
    public function index(){
        $myUserInfo = UsersInfo::where('AuthenticationID', Auth::user()->id)->get()[0];
        $myName = $myUserInfo->Name;
        $mySubmissions = Mongo_subs::where('submitted_by', $myName)->get();
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
        dd($submission->keywords);
        $modifiedSubmission->keywords = $submission->keywords;
        $modifiedSubmission->title = $request['title'];
        $modifiedSubmission->abstract = $request['abstract'];
        $modifiedSubmission->authors = $request['abstract'];
        $modifiedSubmission->submitted_by = $request['submitted_by'];
        $modifiedSubmission->corresponding_author = $request['corresponding_author'];
        $modifiedSubmission->type = $request['type'];
        $modifiedSubmission->active = $request['active'];
        $modifiedSubmission->status = 'Modified';
        $modifiedSubmission->submission_date_time = date('Y-m-d H:i:s');

        $modifiedSubmission->save();

        return redirect('dashboard');
    }
}
