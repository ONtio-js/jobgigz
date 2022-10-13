<?php

namespace App\Http\Controllers;

use App\Http\Requests\freelanceAuthrequest;
use App\Models\CompanyAuth;
use App\Models\FreelancerAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class FreelanceAuthController extends Controller
{
    public function freelance_mode(){
        return view('authpages.freelance_signup');
    }
    public function showlogin(){
        return view('authpages.sign_in');
    }
    public function register(freelanceAuthrequest $request){
        $request->validated();

       $freelance = FreelancerAuth::create([
            'firstname'=>$request->input('FirstName'),
            'lastname'=>$request->input('LastName'),
            'location'=>$request->input('location'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);

        if ($freelance){
            return redirect()->back()->with('confirmation','Account created successfully');
        }else {
            return redirect()->back()->with('confirmation','Something is wrong');
        }

        
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $freelancer = FreelancerAuth::where('email','=',$request->email)->first();
        $company = CompanyAuth::where('email','=',$request->email)->first();

        if ($freelancer){
            if(Hash::check($request->password,$freelancer->password)){
                session()->put('details',['freelanceId'=>$freelancer->id,'freelancer'=>$freelancer->firstname]);
                return redirect(route('home.index'))->with('message','Welcome to JOBgigz!'.$freelancer->firstname);
            }else {
                
                session::flash('password','incorrect password');
                return redirect()->back();
            }
        }else if ($company){
            if (Hash::check($request->password, $company->password)){
                session()->put('details',['companyId'=>$company->id,'company' => $company->companyname]);
                return redirect(route('home.index'))->with('message',$company->name.' Welcome to JOBgigz!');
            }else{
                session::flash('password','incorrect password');
                return redirect()->back();
               
            }
        }else {
            session::flash('password','Email is not Registered');
            return redirect()->back();
        }
    }

    public function logout(){
        if(session()->has('details.freelanceId') || session()->has('details.companyId')){
            session()->flush();
            Auth::logout();
            return redirect(route('home.index'));
        }else{
            session::flash('message','Unable to logout');
            return back();
        }
   
    }
}
