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
                <form class="lg_form" method="POST" action="{{route('passwordresetlink')}}">
                    @csrf
                    <div class="main-heading">
                        <h2>Forgot Password</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <p class="forgot_des">Enter your email and we'll send a link to reset your password.</p>
                    <div class="form-group">
                        <label class="label15">Email Address*</label>
                        <input name="email" type="email" class="job-input" placeholder="Enter Email Address">
                    </div>
                    @error('email')
                       <span style="color: red">{{$message}}</span>
                    @enderror
                    <button class="lr_btn" type="submit">Send Link</button>
                    <div class="done140">
                        Go to<a href="/showlogin">Sign in<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
