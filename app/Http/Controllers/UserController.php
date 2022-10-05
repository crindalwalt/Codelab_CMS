<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorRequest;
use App\Http\Requests\UpdateVisitorRequest;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('admin.index');
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
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return view('admin.visitor.index')->with('message','Shabash Mubashar Puttar');
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
        return view('admin.visitor.edit');
    }




    public function delete(Visitor $visitor){
        return "ho gya smjho delete";
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
        $visitor->name = $request->name;
        $visitor->cnic = $request->cnic;
        $visitor->father_name = $request->father_name;
        $visitor->father_phone = $request->father_phone;
        $visitor->phone = $request->phone;
        $visitor->gender = $request->gender;
        $visitor->interest = $request->interest;
        $visitor->education = $request->education;
        $visitor->institute = $request->institute;
        $visitor->city = $request->city;
        $visitor->marital_status = $request->marital_status;
        $visitor->role = $request->role;
        $visitor->email = $request->email;;
        $visitor->password = $request->password;
        $visitor->save();
        return redirect()->route('visitor.index')->with('success','Information has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();

    }
}
