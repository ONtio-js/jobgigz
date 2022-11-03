@extends('layouts.auth')


@section('content')
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<main class="browse-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <form class="lg_form" method="POST" action="{{route('passwordvalidate')}}">
                    @csrf
                    <div class="main-heading">
                        <h2>Reset Password</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <p class="forgot_des">Enter your new password.</p>
                    <div class="form-group">
                        <label class="label15">Email<span style="color: red">*</span></label>
                        <input name="email" type="email" class="job-input" placeholder="Enter Email Address">
                    </div>
                    @error('password')
                       <span style="color: red">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label class="label15">New Password<span style="color: red">*</span></label>
                        <input name="password" type="password" class="job-input" placeholder="Enter Email Address">
                    </div>
                    @error('password')
                       <span style="color: red">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label class="label15">Confirm Password<span style="color: red">*</span></label>
                        <input name="password_confirmation" type="password" class="job-input" placeholder="Enter Email Address">
                    </div>
                    @error('password_confirmation')
                       <span style="color: red">{{$message}}</span>
                    @enderror
                    <button class="lr_btn" type="submit">Reset Password</button>
                    <div class="done140">
                        Go to<a href="/showlogin">Sign in<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
