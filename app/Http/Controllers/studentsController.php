<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Models\students;
use Facade\FlareClient\View;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=students::all();
       return view('welcome',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $students=new students;
        $students->name=$request->name;
        $students->city=$request->city;
        $students->marks=$request->marks;
        $students->save();
        return redirect(route('index'))->with('add','Student Data Add Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students=students::find($id);
        return view('edit',['students'=>$students]);
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
        
       
        $students=students::find($id);
        $students->name=$request->name;
        $students->city=$request->city;
        $students->marks=$request->marks;
        $students->save();
        return redirect(route('index'))->with('status','Student Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        students::destroy($id);
        return redirect(route('index'))->with('delete','Student Data delete Successfully');
    }
}
