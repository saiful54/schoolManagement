<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\HtmlServiceProvider;
use App\NewModel;
use Auth;

class PostController extends Controller
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
        return view('themes.all');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'fname' => 'required|string|min:5',
            'address' => 'required|string'
        ]);
        $input= $request->all();
        NewModel::create($input);
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all= NewModel::paginate(1000);
        return view('post.create', compact('all'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statusUpdate= NewModel::findOrFail($id);
        return view('post.edit', compact('statusUpdate'));
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
        $input= $request->all();
        $update= NewModel::findOrFail($id);
        $update->update($input);
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= NewModel::findOrFail($id);
        $delete->delete();
        return redirect('show');
    }

    public function postApprove($id) {
        $statusUpdate= NewModel::findOrFail($id);
        if($statusUpdate)
        {
            $statusUpdate->status = 1;
            $statusUpdate->save();
            return redirect('show');
        }
    }

    public function logout()
    {
        if(Auth::check()){
            return view('auth.login');
        }else{
            return redirect('login');
        }
    }
}
