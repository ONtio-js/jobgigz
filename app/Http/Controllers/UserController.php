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

    public function register(UserRequest $request)
    {
        $request->validated();

        $user_stored = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        if ($user_stored) {
            VerifyUser::create([
                'token' => Str::random(60),
                'user_id' => $user_stored->id
            ]);

            Mail::to($user_stored->email)->send(new Emailverify($user_stored));

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

    public function verifyemail($token)
    {
        $verified = VerifyUser::where('token','=',$token)->first();

        if (isset($verified)){
            $user = $verified->user;

            if (!$user->verified_email_at){
                $user->verified_email_at = Carbon::now();
                $user->remember_token = $token;
                $user->save();
                session()->flash('message','Email succesfully Verified');
                return redirect(route('showlogin'));
            }else{
                session()->flash('message','Email already Verified');
                return redirect(route('showlogin'));
            }
        }else{
            return redirect(route('showlogin'))->with('message','unrecognized Token');
        }

        return true;
    }

    public function sendPasswordResetLink($email)
    {
        $user = User::where('email','=',$email);

        if (isset($user)){

            PasswordReset::create([
                'email' =>$email,
                'token' => Str::random(60)
            ]);

            Mail::to($user->email)->send(new MailPasswordReset($user));
            session()->flash('message','password reset link sent to your Email');
            return redirect()->back();
        }else{
            return abort(403,'Unauthorized Access');
        }
    }

    public function passwordreset(){
        
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
