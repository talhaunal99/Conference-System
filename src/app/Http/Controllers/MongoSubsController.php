<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mongo_subs;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\True_;

class MongoSubsController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('submissions.create');
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

        $submission = new Mongo_subs();

        $submission->prev_submission_id = $request->prev_submission_id;
        $submission->submission_id = $request->submission_id;
        $submission->title = $request->title;
        $submission->abstract = $request->abstract;
        $submission->authors = [
            'authenticationID' => $request->authors_authenticationID,
            'name' => $request->authors_name,
            'email' => $request->authors_email,
            'affil' => $request->authors_affil,
            'country' => $request->authors_country,
        ];
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

        $submission->submitted_by = "";
        $submission->pdf_path = "";
        $submission->type = "";
        $submission->status = "";
        $submission->active = "";

        $submission->save();

        return redirect()->route('submission_create');
    }
}
