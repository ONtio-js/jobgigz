<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyAuthrequest;
use App\Models\CompanyAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyAuthController extends Controller
{
    public function index(){
        return view('authpages.index');
    }

    public function company_mode(){
        return view('authpages.company_sign_up');
    }

    public function register(CompanyAuthrequest $request){
        $request->validated();

        $company =  CompanyAuth::create([
            'companyname'=>$request->companyName,
            'email'=>$request->email,
            'password'=>Hash::make($request->input('password'))
        ]);

        if ($company){
            session()->flash('success','Account Created successfully');
            return redirect()->back();
        }else{
            session()->flash('fail','something is wrong');
            return redirect()->back();
        }


    }
}
