<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\ConferenceTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function index(){
        $conferences = Conference::get();
        return view('conferences.index', [
            'conferences' => $conferences
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

        $tags = explode(",", $request->Tags);
        if ($request->Tags != '') {
            $confID = $request->ShortName . "_" . $request->Year;
            foreach ($tags as $tag) {
                $conference_tag = new ConferenceTag();
                $conference_tag->confID = $confID;
                $conference_tag->Tag = $tag;
                $conference_tag->save();
            }
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
        return redirect()->route('conference');
    }
}
