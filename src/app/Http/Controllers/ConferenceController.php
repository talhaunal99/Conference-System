<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

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

        $conference = new Conference();

        $conference->CreationDateTime = $request->CreationDateTime;
        $conference->Name = $request->Name;
        $conference->ShortName = $request->ShortName;
        $conference->Year = $request->Year;
        $conference->StartDate = $request->StartDate;
        $conference->EndDate = $request->EndDate;
        $conference->Submission_Deadline = $request->Submission_Deadline;
        $conference->WebSite = $request->WebSite;

        $conference->save();

    }
}
