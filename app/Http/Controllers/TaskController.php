<?php

namespace App\Http\Controllers;

use App\lecturer;
use Illuminate\Http\Request;
use App\Faculty;


class TaskController extends Controller
{
    //
    public function index(){
        $faculty = Faculty::all();
        return view('form')->with(compact('faculty'));
    }


    public function createLecturer(Request $request){
        $obj = new lecturer();
        $obj->name = $request->input('lname');
        $obj->gender = $request->input('gender');
        $obj->phone = $request->input('phone');
        $obj->email = $request->input('email');
        $obj->address = $request->input('address');
        $obj->nationality = $request->input('nationality');
        $obj->dob = $request->input('dob');
        $obj->faculty = $request->input('faculty');
        $obj->modules = $request->input('module');
        $obj->save();
    }

}
