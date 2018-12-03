<?php

namespace App\Http\Controllers;

use App\lecturer;
use Illuminate\Http\Request;
use App\Faculty;
use App\Module;
use Validation;

class TaskController extends Controller
{
    //
    public function index(){
        $faculty = Faculty::all();
        return view('form')->with(compact('faculty'));
    }


    public function createLecturer(Request $request){
        $request->validate([
            'lname' => 'required|min:5|alpha',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'nationality' => 'required',
            'dob' => 'required|date',
            'faculty' => 'required',
            'module' => 'required'
        ]);
        $obj = new lecturer();
        $obj->name = $request->input('lname');
        $obj->gender = $request->input('gender');
        $obj->phone = $request->input('phone');
        $obj->email = $request->input('email');
        $obj->address = $request->input('address');
        $obj->nationality = $request->input('nationality');
        $obj->dob = $request->input('dob');
        $obj->faculty = $request->input('faculty');
        if (!empty($request->input('module')))
        {
            $modules = $request->input('module');
            foreach($modules as $module)
            {
                $array[] = $module;
            }
            $obj->modules = implode('|', $array);
        }
        $obj->save();
    }

    public function viewDetail(){
        $view = lecturer::all();
        return view('view')->with(compact('view'));
    }

    public function getModule($id)
    {
        $module = Module::where('faculty_id','=',$id)->get();
//        dd($module);
        return response()->json($module);

    }

}
