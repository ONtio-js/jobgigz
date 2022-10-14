<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyUpadteRequest;
use App\Models\Company;
use App\Models\CompanyAuth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('company_auth')->paginate();
        return view('company.index',['companies'=>$companies]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function reviews(){
        return view('company.review');
    }

    public function members(){
        return view('company.member');
    }

    public function freelancers(){
        return view('company.freelance');
    }

    public function profile(){
        return view('company.profile');
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
        $companyId = CompanyAuth::find($id);

        // return view('company.view',['id'=>$companyId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyId = CompanyAuth::find($id);

        return view('company.edit',['id'=>$companyId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpadteRequest $request, $id)
    {

        $request->validated();

        $companyId = CompanyAuth::find($id);

        if ($companyId){
           $update = Company::updateOrcreate([

           ]);
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
        //
    }
}
