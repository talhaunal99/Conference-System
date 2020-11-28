<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersInfoController extends Controller
{
    public function index()
    {
        return view('users-infos.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
