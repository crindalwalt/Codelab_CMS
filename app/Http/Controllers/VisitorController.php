<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use App\Http\Requests\StoreVisitorRequest;
use App\Http\Requests\UpdateVisitorRequest;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitor = User::where('role',2)->get();
        return view('admin.visitor.index',[
            'visitors'=>$visitor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisitorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisitorRequest $request)
    {
    //dd($request->all());
        $validated = $request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'father_name'=>'required|string',
            'father_phone'=>'required|string',
            'interest'=>'required',
            'cnic'=>'digits:13',
            'gender'=>'required',
            'email'=>'required|email',
            'institude'=>'required',
            'city'=>'required',
            'education'=>'required'

        ]);
        return "form is validated";
//        $submitData = new User();
//        $submitData->name = $request->name;
//        $submitData->phone = $request->phone;
//        $submitData->father_name = $request->father_name;
//        $submitData->father_phone = $request->father_phone;
//        $submitData->interest = $request->interest;
//        $submitData->cnic = $request->cnic;
//        $submitData->gender = $request->gender;
//        $submitData->email = $request->email;
//        $submitData->institude = $request->institude;
//        $submitData->city = $request->city;
//        $submitData->education = $request->education;
//        $submitData->save();
//        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitorRequest  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitorRequest $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
