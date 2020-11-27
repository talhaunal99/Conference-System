<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\ConferenceRole;
use App\Models\ConferenceTag;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function index(){
        $conferencesAndTags = collect();
        $conferences = Conference::get();
        foreach ($conferences as $conference) {
            $tags = ConferenceTag::select('Tag')->where('ConfID', $conference->ConfID)->get()->toArray();
            $tagsString = "";
            foreach ($tags as $tag) {
                $tagsString .= $tag['Tag'] . ", ";
            }
            $tagsString = rtrim($tagsString, ", ");
            $conferencesAndTags->push([$conference, $tagsString]);
        }
        return view('conferences.index', [
            'conferencesAndTags' => $conferencesAndTags
        ]);
    }

    public function chair(){
        $id = Auth::user()->id;
        $conference_conf_ids = ConferenceRole::select('ConfID')
            ->where('Role', 'Chair')
            ->where('AuthenticationID', $id)
            ->get()
            ->toArray();
        $conferences = collect();
        foreach ($conference_conf_ids as $conference_conf_id){
            $conference = Conference::where('ConfID', $conference_conf_id)->get()->first();
            $conferences->push($conference);
        }
        $users = User::get();
        $roles = Role::where('Role', '!=', 'Author')->get();
        return view('conferences.conference-chair', [
            'conferences' => $conferences,
            'users' => $users,
            'roles' => $roles
        ]);
    }

    public function create(){
        return view('conferences.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'CreationDateTime' => 'required',
            'Name' => 'required|max:100',
            'ShortName' => 'required|max:19',
            'Year' => 'required',
            'StartDate' => 'required|after_or_equal:CreationDateTime',
            'EndDate' => 'required|after:StartDate',
            'Submission_Deadline' => 'required|after:StartDate',
            'WebSite' => 'required',
        ]);

        $ConfID = $request->ShortName . "_" . $request->Year;

        $conferences = Conference::select('ConfID')
            ->where('ConfID', 'like', $ConfID.'%')
            ->orderBy('ConfID', 'desc')
            ->get();

        $latestConfID = $conferences[0]->ConfID;
        $pos = strrpos($latestConfID, "_");
        if ($pos){
            $version = ((int)substr($latestConfID, $pos + 1)) + 1;
            $ConfID .= '_' . $version;
        }

        $conference = new Conference();

        $conference->CreationDateTime = $request->CreationDateTime;
        $conference->Name = $request->Name;
        $conference->ShortName = $request->ShortName;
        $conference->Year = $request->Year;
        $conference->StartDate = $request->StartDate;
        $conference->EndDate = $request->EndDate;
        $conference->Submission_Deadline = $request->Submission_Deadline;
        $conference->WebSite = $request->WebSite;
        $conference->ConfID = $ConfID;
        $conference->CreatorUser = Auth::id();
        $conference->approved = 0;

        $conference->save();

        $tags = explode(",", $request->Tags);
        if ($request->Tags != '') {
            foreach ($tags as $tag) {
                $conference_tag = new ConferenceTag();
                $conference_tag->confID = $ConfID;
                $conference_tag->Tag = trim($tag);
                $conference_tag->save();
            }
        }

        $conferenceRole = new ConferenceRole();
        $conferenceRole->ConfID = $ConfID;
        $conferenceRole->Role = 'Chair';
        $conferenceRole->AuthenticationID = Auth::id();

        $conferenceRole->save();

        return redirect()->route('conference');
    }

    public function edit(Conference $conference){
        $tags = ConferenceTag::where('ConfID', $conference->ConfID)->get();
        $tag_string = "";
        foreach ($tags as $tag)
            $tag_string .= $tag->Tag . ", ";
        $tag_string = rtrim($tag_string, ", ");
        return view('conferences.edit', [
            'conference' => $conference,
            'tags' => $tag_string
        ]);
    }

    public function update(Request $request, Conference $conference){

        $this->validate($request, [
            'CreationDateTime' => 'required',
            'Name' => 'required|max:100',
            'ShortName' => 'required|max:19',
            'Year' => 'required',
            'StartDate' => 'required|after_or_equal:CreationDateTime',
            'EndDate' => 'required|after:StartDate',
            'Submission_Deadline' => 'required|after:StartDate',
            'WebSite' => 'required',
        ]);

        $tags = explode(",", $request->Tags);

        ConferenceTag::where('ConfID', '=', $conference->ConfID)->delete();
        foreach ($tags as $tag) {
            $conference_tag = new ConferenceTag();
            $conference_tag->confID = $conference->ConfID;
            $conference_tag->Tag = trim($tag);
            $conference_tag->save();
        }

        $conference = Conference::find($conference->ConfID);

        $conference->CreationDateTime = $request->CreationDateTime;
        $conference->Name = $request->Name;
        $conference->ShortName = $request->ShortName;
        $conference->Year = $request->Year;
        $conference->StartDate = $request->StartDate;
        $conference->EndDate = $request->EndDate;
        $conference->Submission_Deadline = $request->Submission_Deadline;
        $conference->WebSite = $request->WebSite;

        $conference->save();
        return redirect()->route('conference');

    }

    public function delete(Conference $conference){
        $conference->delete();
        return redirect()->route('conference');
    }

    public function changeActivation(Conference $conference){
        $conference->approved = !$conference->approved;
        $conference->save();
        return $this->index();
    }
}
