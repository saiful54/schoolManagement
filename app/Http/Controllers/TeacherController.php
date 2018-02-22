<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherModel;
use App\StudentModel;
use App\BulkStudent;
use App\NewModel;
use App\ClassModel;
use App\SectionModel;
use DB;
use Auth;
use Session;
session_start();
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function view($id)
    {
        if(Auth::check()){
            $all=TeacherModel::findOrFail($id);
            return view('themes.pages.view_teacher', array('all' => $all));
        }else{
            return redirect('login');
        }   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('themes.pages.addTeacher');
        }else{
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
                if($request->hasFile('photo')){
                $fname = $request->input('fname');
                $lname = $request->input('lname');
                $dob = $request->input('dob');
                $age = $request->input('age');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $address = $request->input('address');
                $regDate = $request->input('regDate');
                $jobtype = $request->input('jobtype');

                $filename= $request->photo->getClientOriginalName();
                $request->photo->storeAs('/storage/', $filename);

                $obj= new TeacherModel;
                $obj->fname= $fname;
                $obj->lname= $lname;
                $obj->dob= $dob;
                $obj->age= $age;
                $obj->email= $email;
                $obj->phone= $phone;
                $obj->address= $address;
                $obj->regDate= $regDate;
                $obj->jobtype= $jobtype;

                $oldFilename= $obj->photo;
                $obj->photo= $filename;

                $obj->save();  
            }
            Session::put('message', 'Teacher added successfully');
            return redirect('showTeacher'); 
        }else{
            return redirect('login');
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::check()){
            $allteacher = TeacherModel::paginate(1000);
            return view('themes.pages.teacherList', compact('allteacher'));
        }else{
            return redirect('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $all=TeacherModel::findOrFail($id);
            return view('themes.pages.edit_teacher', array('all' => $all));
        }else{
            return redirect('login');
        }  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()){
            if($request->hasFile('photo')){
            $fname = $request->input('fname');
            $lname = $request->input('lname');
            $dob = $request->input('dob');
            $age = $request->input('age');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $regDate = $request->input('regDate');
            $jobtype = $request->input('jobtype');

            $filename= $request->photo->getClientOriginalName();
            $request->photo->storeAs('/storage/', $filename);

            $obj= new TeacherModel;
            $obj->fname= $fname;
            $obj->lname= $lname;
            $obj->dob= $dob;
            $obj->age= $age;
            $obj->email= $email;
            $obj->phone= $phone;
            $obj->address= $address;
            $obj->regDate= $regDate;
            $obj->jobtype= $jobtype;

            $oldFilename= $obj->photo;
            $obj->photo= $filename;

            $obj->save();  
        }
        $input= $request->all();
        $all= TeacherModel::findOrFail($id);
        $all->update($input);
            Session::put('message', 'Teacher updated successfully');
            return redirect('showTeacher');
        }else{
            return redirect('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $all= TeacherModel::findOrFail($id);
            $all->delete();
            Session::put('message', 'Teacher deleted successfully');
            return redirect('showTeacher');
        }else{
            return redirect('login');
        }
    }
}
