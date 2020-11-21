<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\ConferenceTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function index(){
        return view('conferences.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'CreationDateTime' => 'required',
            'Name' => 'required',
            'ShortName' => 'required',
            'Year' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
            'Submission_Deadline' => 'required',
            'WebSite' => 'required',
        ]);

        $tags = explode(",", $request->Tags);
        $confID = $request->ShortName . "_" . $request->Year;
        foreach ($tags as $tag) {
            $conference_tag = new ConferenceTag();
            $conference_tag->confID = $confID;
            $conference_tag->Tag = $tag;
            $conference_tag->save();
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
        $conference->CreatorUser = Auth::id();

        $conference->save();

    }
}
