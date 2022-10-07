<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Models\Visitor;

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
        return view('admin.visitor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\User\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return view('admin.index')->with('message','New user had been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin.visitor.edit')->with('data',$data);
    }




    public function delete(Visitor $visitor){
        return "ho gya smjho delete";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\User\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->cnic = $request->cnic;
        $user->father_name = $request->father_name;
        $user->father_phone = $request->father_phone;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->interest = $request->interest;
        $user->education = $request->education;
        $user->institute = $request->institute;
        $user->city = $request->city;
        $user->marital_status = $request->marital_status;
        $user->role = $request->role;
        $user->email = $request->email;;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('visitor.index')->with('success','Information has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

    }
}
