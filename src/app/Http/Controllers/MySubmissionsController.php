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
}
