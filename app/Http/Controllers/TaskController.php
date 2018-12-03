<?php

namespace App\Http\Controllers;

use App\lecturer;
use Illuminate\Http\Request;
use App\Faculty;
use App\Module;
use Validation;
use DB;

class TaskController extends Controller
{
    //faculty selection in dropdown
    public function index(){
        $faculty = Faculty::all();
        return view('form')->with(compact('faculty'));
    }

    //create function for lecturer table
    public function createLecturer(Request $request){
        //validation
        $request->validate([
            'lname' => 'required|min:5',
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
            $modules = $request->input('module'); //inserting multiple datas
            foreach($modules as $module)
            {
                $array[] = $module;
            }
            $obj->modules = implode('|', $array);
        }
        $obj->save();
        return redirect('/view')->with('success','Lecturers were added');
    }

    //show detail after inserting data
    public function viewDetail(){
        $view = Lecturer::with('module','faculty')->get();
//        $view = DB::select("SELECT l.*,f.faculty,m.modules FROM lecturers l left JOIN faculties f on l.faculty=f.id left JOIN modules m on l.modules=m.id;");
        return view('view')->with(compact('view'));
    }

    //for json data conversion
    public function getModule($id)
    {
        $module = Module::where('faculty_id','=',$id)->get();
//        dd($module);
        return response()->json($module);

    }

}
