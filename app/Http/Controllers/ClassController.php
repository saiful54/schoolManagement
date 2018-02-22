<?php

namespace App\Http\Controllers;

use App\ClassModel;
use Illuminate\Http\Request;
use App\SectionModel;
use DB;
use Auth;
use Session;
session_start();

class ClassController extends Controller
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
        return view('themes.pages.addClass');
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
        ClassModel::create($input);

        Session::put('message', 'Class created successfully');

        return redirect('showClass');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all= ClassModel::paginate(500);
        return view('themes.pages.showClass', compact('all'));

    }

    public function showClassDetails($id)
    {
        if(Auth::check()){
            $all=SectionModel::findOrFail($id);
            return view('themes.pages.showClassDetails', array('all' => $all));
        }else{
            return redirect('login');
        }  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editClass = ClassModel::findOrFail($id);
        return view('themes.pages.editClass', array('editClass' => $editClass));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $all= ClassModel::findOrFail($id);
        $all->update($input);
        Session::put('message', 'Class updated successfully');
        return redirect('showClass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $all= ClassModel::findOrFail($id);
        $all->delete();
        Session::put('message', 'Class deleted successfully');
        return redirect('showClass');
    }
}
