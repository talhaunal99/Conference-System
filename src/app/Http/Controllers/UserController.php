<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function edit(User $user){
        $user->approved = !$user->approved;
        $user->save();
        return $this->index();
    }
}
