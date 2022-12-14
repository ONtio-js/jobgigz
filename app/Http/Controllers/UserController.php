<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\Emailverify;
use App\Mail\PasswordReset as MailPasswordReset;
use App\Models\PasswordReset;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {
        return view('authpages.index');
    }

    public function freelance_mode()
    {
        return view('authpages.freelance_signup');
    }

    public function company_mode()
    {
        return view('authpages.company_sign_up');
    }

    public function showlogin()
    {
        return view('authpages.sign_in');
    }
    public function passwordresetlinkform(){
        return view('authpages.forgot_password');
    }

    public function verificationPopup(){
        return view('authpages.verify_user');
    }
    public function newpasswordform(){
        return view('authpages.reset_password');
    }
    private function verificationToken($user){
        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $user->id
        ]);

        Mail::to($user->email)->send(new Emailverify($user));


    }
    public function repeatVerification($id){
        $user = User::find($id);

        $this->verificationToken($user);

        return redirect('/');
    }
    public function register(UserRequest $request)
    {
        $request->validated();

        $user_stored = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        if ($user_stored) {
            $this->verificationToken($user_stored);

            return redirect()->back()->with('confirmation', 'Account created successfully, confirm your email for full access');
        } else {
            return redirect()->back()->with('confirmation', 'Something is wrong');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $freelancer = User::where([['email','=',$request->email], ['role','=','freelancer']])->first();

        $company = User::where([['email','=',$request->email], ['role','=','company']])->first();

        if ($freelancer){
            if(Hash::check($request->password,$freelancer->password)){
                session()->put('details',['freelanceId'=>$freelancer->id,'freelancer'=>$freelancer->firstname??'freelancer','verify' => $freelancer->email_verified_at]);
                return redirect(route('home.index'))->with('message','Welcome to JOBgigz!'.$freelancer->firstname);
            }else {

                session::flash('password','incorrect password');
                return redirect()->back();
            }
        }else if ($company){
            if (Hash::check($request->password, $company->password)){
                session()->put('details',['companyId'=>$company->id,'company' => $company->companyname??'companyname','verify' => $company->email_verified_at]);
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

    public function verifyemail($token )
    {
        if (session()->has('details')){
            $this->logout();
        }

        $verified = VerifyUser::where('token','=',$token)->first();

        if (isset($verified)){
            $user = $verified->user;

            if (!$user->email_verified_at){
                $user->email_verified_at = Carbon::now();
                $user->remember_token = $token;
                $user->save();

                session()->flash('message','Email succesfully Verified');
                return redirect()->route('showlogin');
            }else{
                session()->flash('message','Email already Verified');
                return redirect()->route('showlogin');
            }
            $verified->delete();
        }else{
            return redirect()->route('showlogin')->with('message','unrecognized Token');
        }

        return true;

    }

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ]);

        $user = User::where('email',$request->email)->first();

        if ($user != null){

            PasswordReset::create([
                'users_id' => $user->id,
                'email' =>$request->email,
                'token' => Str::random(60),
                'created_at' => Carbon::now()
            ]);

            Mail::to($user->email)->send(new MailPasswordReset($user));
            session()->flash('message','password reset link sent to your Email');
            return redirect()->back();
        }else{
            return abort(403,'Unauthorized Access');
        }
    }

    public function passwordreset($token){
        $verified = PasswordReset::where('token',$token)->first();

        if (isset($verified)){
           return redirect()->route('newpasswordform');
        }else{
            abort(403,'forbidden access');
        }

    }

    public function password_validate_reset(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=>'required|confirmed|min:10|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
       $passwordUpdate = User::where('email',$request->email)->update([
            'password'=>Hash::make($request->password)
        ]);
        $this->logout();
        if ($passwordUpdate){
            session()->flash('message','password Updated successfully');
            return redirect(route('showlogin'));
        }else{
            return abort(500,'Internal server Error');
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
