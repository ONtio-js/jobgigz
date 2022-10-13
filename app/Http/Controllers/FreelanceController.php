<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_Auth',['except'=>['search']]);
    }
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function dashboard(){
        return view('freelance.dashboard');
    }
    public function bids(){
        return view('freelance.bids');
    }

    public function bookmarks(){
        return view('freelance.bookmarks');
    }
    public function messages(){
        return view('freelance.messages');
    }
    public function notification(){
        return view('freelance.notifications');
    }
    public function payments(){
        return view('freelance.payments');
    }
    public function portfolio(){
        return view('freelance.portfolio');
    }
    public function profile(){
        return view('freelance.profile');
    }
    public function reviews(){
        return view('freelance.reviews');
    }
    public function setting(){
        return view('freelance.setting');
    }
    public function search(){
        return view('freelance.search');
    }
    public function job(){
        return view('freelance.jobs');
    }
}
