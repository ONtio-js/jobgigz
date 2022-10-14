@extends('layouts.auth')

@section('content')
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Freelancer Register</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <main class="browse-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-heading bids_heading">
                        <h2>Create Freelancer Profile</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <div class="post501">
                        <form action="{{ route('freelance-store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label15">Email Address<span style="color: red">*</span></label>
                                        <input type="email" class="job-input" placeholder="Enter Your Email Address"
                                            name="email" value="{{old('email')}}">
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label15">Password <span style="color: red">*</span></label>
                                        <input type="password" class="job-input" placeholder="Enter Your Password"
                                            name="password" value="{{old('password')}}">
                                        @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label15">Confirm Password <span style="color: red">*</span></label>
                                        <input type="password" class="job-input" placeholder="Enter Your Password"
                                            name="password_confirmation" value="{{old('password_confirmation')}}">

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="post_jp_btn" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-heading bids_heading pjfaq80">
                        <h2>FAQ</h2>
                    </div>
                    <div class="jp_faq">
                        <div class="jp_faq_item">
                            <h4>01. Complete your profile</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at
                                erat egestas, nec porta diam pharetra.</p>
                        </div>
                        <div class="jp_faq_item">
                            <h4>02. Upload a profile picture</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at
                                erat egestas, nec porta diam pharetra.</p>
                        </div>
                        <div class="jp_faq_item">
                            <h4>03. Be honest about availability</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at
                                erat egestas, nec porta diam pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
