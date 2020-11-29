<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\ConferenceRole;
use App\Models\Country;
use App\Models\Mongo_subs;
use App\Models\Submission;
use App\Models\User;
use App\Models\UsersInfo;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\True_;

class MongoSubsController extends Controller
{
    public function index(){

    }
    public function create(Conference $conference){
        $users = UsersInfo::get();
        return view('submissions.create',
        ['conference' => $conference,
            'users' => $users]);
    }

    public function store(Request $request){
        /*$this->validate($request, [
            'prev_submission_id' => 'required',
            'submission_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'authors_authenticationID' => 'required',
            'authors_name' => 'required',
            'authors_email' => 'required',
            'authors_affil' => 'required',
            'authors_country' => 'required',
        ]);*/
        $submissionsCount = Mongo_subs::where('ConfID', $request['confID'])->get()->count() + 1;

        $submission = new Mongo_subs();
        $submission->submission_id = $request['confID'] . "_" . $submissionsCount;
        $submission->prev_submission_id = null;
        $submission->ConfID = $request['confID'];
        $submission->title = $request->title;
        $submission->abstract = $request->abstract;

        /* Create Submission for MySQL. */
        $mysqlSubmission = new Submission();

        $user = UsersInfo::where('Name', $request['submitted_by'])->get()[0];
        $mysqlSubmission->AuthenticationID = $user->AuthenticationID;
        $mysqlSubmission->ConfID = $request['confID'];
        $mysqlSubmission->submission_id = $request['confID'] . "_" . $submissionsCount;
        $mysqlSubmission->prev_submission_id = null;

        $mysqlSubmission->save();

        $authors = [];
        foreach ($request['author'] as $author) {
            $userInfo = UsersInfo::where('Name', $author)->get()[0];
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

            $existingConferenceRole = ConferenceRole::where('confID', $request['confID'])
                ->where('Role', 'Author')
                ->where('AuthenticationID', $userInfo->AuthenticationID)
                ->get()
                ->count();

            if ($existingConferenceRole == 0) {
                $conferenceRole = new ConferenceRole();
                $conferenceRole->ConfID = $request['confID'];
                $conferenceRole->Role = 'Author';
                $conferenceRole->AuthenticationID = $userInfo->AuthenticationID;
                $conferenceRole->save();
            }
        }

        $submission->authors = $authors;
        $submission->corresponding_author = $request->corresponding_author;
        $submission->submission_date_time = date('Y-m-d H:i:s');

        $keywords = explode(",", $request->keywords);
        $keys = [];
        if ($request->keywords != '') {
            foreach ($keywords as $keyword) {
                array_push($keys, $keyword);
            }
        }
        $submission->keywords = $keys;

        $submission->submitted_by = $request['submitted_by'];
        $submission->pdf_path = "";
        $submission->type = $request['type'];
//        $submission->status = $request['status'];
        $submission->status = 'Original';
        $submission->active = $request['active'];

        $submission->save();

        return redirect()->route('dashboard');
    }
}
