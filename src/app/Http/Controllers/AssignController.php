<?php

namespace App\Http\Controllers;

use App\Models\ConferenceRole;
use App\Models\User;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function update(Request $request)
    {
        $conferenceRole = new ConferenceRole();
        $conferenceRole->ConfID = $request['confID'];
        $conferenceRole->Role = $request['role'];

        $user = User::where('username', $request['user'])->get()->first();

        $conferenceRole->AuthenticationID = $user->id;
        $conferenceRole->save();
        return redirect()->back();
    }
}
