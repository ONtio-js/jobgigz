@extends('layouts.auth')

@section('content')
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Sign In</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <main class="browse-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <form class="lg_form" action="{{ route('login') }}" method="POST">
                        @csrf


                        <div class="main-heading">
                            <h2>Sign in to Jobby</h2>
                            <div class="line-shape1">
                                <img src="images/line.svg" alt="">
                            </div>

                                @if (Session()->has('password'))
                                <div class="passwordEr">{{session()->get('password')}}</div>
                                @endif

                        </div>
                        <div class="form-group">
                            <label class="label15">Email Address <span style="color: red">*</span></label>
                            <input type="email" class="job-input" placeholder="Enter Email Address" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="label15">Password<span style="color: red">*</span></label>
                            <input type="password" class="job-input" placeholder="Enter Password" name="password"
                                value="{{ old('password') }}">
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="lr_btn" type="submit">Login</button>
                        <div class="done145">
                            <div class="done146">
                                Need an account?<a href="{{route('mode')}}">Join us Now<i
                                        class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="done147">
                                <a href="forgot_password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
