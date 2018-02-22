<?php

namespace App\Http\Controllers;

use App\SectionModel;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
session_start();

class SectionController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            $allClass = DB::table('class')->select('*')->get();
            $teacher = DB::table('teacher')->select('*')->get();
            return view('themes.pages.addSection', compact('allClass' , 'teacher'));
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
        $input= $request->all();
        SectionModel::create($input);
        Session::put('message', 'Section created successfully');
        return redirect('showSection');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SectionModel  $sectionModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /*$all = DB::table('section')
            ->join('class', 'section.id', '=', 'class.id')->where('section.class_id', '=', 'class.class_name')
            ->select('section.*', 'class.class_name')
            ->get();*/

        $all= SectionModel::paginate(500);
        return view('themes.pages.showSection', compact('all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SectionModel  $sectionModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSection = SectionModel::findOrFail($id);
        return view('themes.pages.editSection', array('editSection' => $editSection));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SectionModel  $sectionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $all= SectionModel::findOrFail($id);
        $all->update($input);
        Session::put('message', 'Class updated successfully');
        return redirect('showSection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SectionModel  $sectionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $all= SectionModel::findOrFail($id);
        $all->delete();
        Session::put('message', 'Class deleted successfully');
        return redirect('showSection');
    }
}
