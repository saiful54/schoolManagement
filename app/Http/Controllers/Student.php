<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;
use App\BulkStudent;
use App\NewModel;
use App\ClassModel;
use App\SectionModel;
use DB;
use Auth;
use Session;
session_start();
class Student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('themes.pages.dashboard');
    }

    public function test()
    {
        $rows = DB::table('student')->get()->where('classes', 1);
        return view('themes.pages.test', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        if(Auth::check()){
            $allClass = DB::table('class')->select('*')->get();
            $allSection = DB::table('section')->select('*')->get();
            return view('themes.pages.addStudent', compact('allClass' , 'allSection'));
        }else{
            return redirect('login');
        }
    }


    public function bulkStudent()
    {
        if(Auth::check()){
            return view('themes.pages.bulkStudent');
        }else{
            return redirect('login');
        } 
    }

    public function bulkStore(Request $request)
    {
    	
        if(Auth::check()){
            $name = $request->input('name');
            $classes = $request->input('classes');
            $section = $request->input('section');
            $dept = $request->input('dept');  

            foreach ($name as $key => $value) {
                $data = array("name"=>$name [$key], 
                            "classes"=>$classes [$key], 
                            "section"=>$section [$key], 
                            "dept"=>$dept[$key]
                        );

            StudentModel::create($data);
            }
            Session::put('message', 'Bulk Student created successfully');
            return redirect('show');
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
                $name = $request->input('name');
                $fname = $request->input('fname');
                $address = $request->input('address');
                $classes = $request->input('classes');
                $section = $request->input('section');
                $dept = $request->input('dept');
                $phone = $request->input('phone');

                $filename= $request->photo->getClientOriginalName();
                $request->photo->storeAs('/storage/', $filename);

                $obj= new StudentModel;
                $obj->name= $name;
                $obj->fname= $fname;
                $obj->address= $address;
                $obj->phone= $phone;
                $obj->classes= $classes;
                $obj->section= $section;
                $obj->dept= $dept;

                $oldFilename= $obj->photo;
                $obj->photo= $filename;

                $obj->save();  
            }
            Session::put('message', 'Student created successfully');
            return redirect('show'); 
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
            $alldata = DB::table('student')->get();
            return view('themes.pages.studentList', compact('alldata'));
        }else{
            return redirect('login');
        }
    }

    public function show1()
    {
        if(Auth::check()){
            $alldata = DB::table('student')->get()->where('classes', 1);
            return view('themes.pages.studentList', compact('alldata'));
        }else{
            return redirect('login');
        }
    }

    public function show2()
    {
        if(Auth::check()){
            $alldata = DB::table('student')->get()->where('classes', 2);
            return view('themes.pages.studentList', compact('alldata'));
        }else{
            return redirect('login');
        }
    }

    public function show3()
    {
        if(Auth::check()){
            $alldata = DB::table('student')->get()->where('classes', 3);
            return view('themes.pages.studentList', compact('alldata'));
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
    public function view($id)
    {
        if(Auth::check()){
            $all=StudentModel::findOrFail($id);
            return view('themes.pages.view_student', array('all' => $all));
        }else{
            return redirect('login');
        }   
    }

    public function edit($id)
    {
        if(Auth::check()){
            $all=StudentModel::findOrFail($id);
            return view('themes.pages.edit_student', array('all' => $all));
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
                $name = $request->input('name');
                $fname = $request->input('fname');
                $address = $request->input('address');
                $classes = $request->input('classes');
                $section = $request->input('section');
                $dept = $request->input('dept');
                $phone = $request->input('phone');

                $filename= $request->photo->getClientOriginalName();
                $request->photo->storeAs('/', $filename);

                $obj= new StudentModel;
                $obj->name= $name;
                $obj->fname= $fname;
                $obj->address= $address;
                $obj->phone= $phone;
                $obj->classes= $classes;
                $obj->section= $section;
                $obj->dept= $dept;

                $oldFilename= $obj->photo;
                $obj->photo= $filename;

                $obj->save(); 
            }


            $input= $request->all();
            $all= StudentModel::findOrFail($id);
            $all->update($input);
            Session::put('message', 'Student updated successfully');
            return redirect('show');
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
            $all= StudentModel::findOrFail($id);
            $all->delete();
            Session::put('message', 'Student deleted successfully');
            return redirect('show');
        }else{
            return redirect('login');
        }
    }

    public function studentList()
    {
        if(Auth::check()){
            return view('themes.pages.studentList');
        }else{
            return redirect('login');
        }
        
    }
}
