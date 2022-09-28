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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $visitors = User::where('role','visitor')->get();
        return view('admin.visitor.index')->with('visitors',$visitors);
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
//        dd($request->all());
        User::create($request->all());

        return redirect()->route('visitor.index')->with('success','Information has been created.');
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
