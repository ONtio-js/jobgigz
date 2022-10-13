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

    public function register(Request $request){
        // $request->validate();
        // dd($request);
        $company =  CompanyAuth::create([
            'companyname'=>$request->companyName,
            'email'=>$request->email,
            'description'=>$request->description,
            'password'=>Hash::make($request->input('password'))
        ]);

        if ($company){
            return redirect()->back()->with('confirmation','Account Created successfully');
        }else{
            return redirect()->back()->with('confirmation','something is wrong');
        }

    
    }
}
