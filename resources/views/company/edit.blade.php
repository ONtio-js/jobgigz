@extends('layouts.app')

@section('content')

<div class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="title-bar-text">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Update Profile</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-9 col-md-8 mainpage mx-auto ">
    <div class="jobs_manage">
        <div class="row">
            <div class="col-lg-3">
                <div class="jobs_tabs">
                    <ul class="nav job_nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#my_profile" id="my-profile-tab"
                                data-toggle="tab">My Company</a>
                        </li>
                        <li class="nav-item job_nav_item">
                            <a class="nav-link" href="#social_accounts" id="social-accounts-tab"
                                data-toggle="tab">Social Accounts</a>
                        </li>
                        <li class="nav-item job_nav_item">
                            <a class="nav-link" href="#add_employee" id="change-password-tab"
                                data-toggle="tab">Add Employee</a>
                        </li>
                        <li class="nav-item job_nav_item">
                            <a class="nav-link" href="#change_password" id="change-password-tab"
                                data-toggle="tab">Change Password</a>
                        </li>
                        <li class="nav-item job_nav_item">
                            <a class="nav-link" href="#delete_account" id="delete-account-tab"
                                data-toggle="tab">Deactivate Account</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="my_profile" role="tabpanel">
                        <div class="view_chart">
                            <div class="view_chart_header">
                                <h4>My Profile</h4>
                            </div>
                            <div class="post_job_body">
                                <form action="/company/{{$id->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Company Logo<span style="color: red">*</span></label>
                                                <div class="avtar_dp">
                                                    <img src="images/profile_dp.jpg" alt="">
                                                </div>
                                                <div class="image-upload-wrap1 ml5">
                                                    <input class="file-upload-input1" id="file3"
                                                        type="file" onchange="readURL(this);"
                                                        accept="image/*" name="file">
                                                    <div class="drag-text1">
                                                        Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label15">Company Email<span style="color: red">*</span></label>
                                                <input type="email" class="job-input"
                                                 name="email" value="{{$id->email}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label15">Launch date<span style="color: red">*</span></label>
                                                <div class="smm_input">
                                                    <input type="text"
                                                        class="job-input datepicker-here"
                                                        data-language="en"
                                                        placeholder="Enter Your Launch Date"
                                                        name="launchdate">
                                                    <div class="mix_max"><i
                                                            class="fas fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Description<span style="color: red">*</span></label>
                                                <div class="description_dtu">
                                                    <div class="description_actions">
                                                        <a href="#"><i
                                                                class="fas fa-bold"></i></a>
                                                        <a href="#"><i
                                                                class="fas fa-italic"></i></a>
                                                        <a href="#"><i
                                                                class="fas fa-list-ul"></i></a>
                                                        <a href="#"><i
                                                                class="fas fa-list-ol"></i></a>
                                                    </div>
                                                    <textarea class="textarea70"
                                                        placeholder="Describe your experience, skills, etc. In complete details. This is your chance to show off."
                                                        name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Industry<span style="color: red">*</span></label>
                                                <input type="email" class="job-input"
                                                    placeholder="Industry" name="industry">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label15">Availability<span style="color: red">*</span></label>
                                                <div
                                                    class="ui fluid search selection dropdown skills-search">
                                                    <input name="avaliability" type="hidden"
                                                        value="">
                                                    <i class="dropdown icon"></i>
                                                    <input class="search" autocomplete="off"
                                                        tabindex="0">
                                                    <span class="sizer" style=""></span>
                                                    <div class="default text">I’m not sure</div>
                                                    <div class="menu transition hidden"
                                                        tabindex="-1">
                                                        <div class="item selected"
                                                            data-value="Availability1">Full Time</div>
                                                        <div class="item selected"
                                                            data-value="Availability2">Part Time</div>
                                                        <div class="item selected"
                                                            data-value="Availability3">Not Available
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="label15">Languages*</label>
                                                <div
                                                    class="ui fluid search selection dropdown skills-search">
                                                    <input name="languages" type="hidden"
                                                        value="">
                                                    <i class="dropdown icon"></i>
                                                    <input class="search" autocomplete="off"
                                                        tabindex="0">
                                                    <span class="sizer" style=""></span>
                                                    <div class="default text">Select Language</div>
                                                    <div class="menu transition hidden"
                                                        tabindex="-1">
                                                        <div class="item" data-value="lang1">English
                                                        </div>
                                                        <div class="item" data-value="lang2">Hindi
                                                        </div>
                                                        <div class="item" data-value="lang3">Punjabi
                                                        </div>
                                                        <div class="item" data-value="lang4">Bengali
                                                        </div>
                                                        <div class="item" data-value="lang5">
                                                            Portuguese</div>
                                                        <div class="item" data-value="lang6">Russian
                                                        </div>
                                                        <div class="item" data-value="lang7">
                                                            Japanese</div>
                                                        <div class="item" data-value="lang8">Telugu
                                                        </div>
                                                        <div class="item" data-value="lang9">French
                                                        </div>
                                                        <div class="item" data-value="lang10">German
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Country<span style="color: red">*</span></label>
                                                <div class="smm_input">
                                                    <input type="text" class="job-input"
                                                        placeholder="Enter Country" name="country">
                                                    <div class="loc_icon"><i
                                                            class="fas fa-crosshairs"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">City<span style="color: red">*</span></label>
                                                <div class="smm_input">
                                                    <input type="text" class="job-input"
                                                        placeholder="Enter City" name="city">
                                                    <div class="loc_icon"><i
                                                            class="fas fa-crosshairs"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Zipcode<span style="color: red">*</span></label>
                                                <div class="smm_input">
                                                    <input type="text" class="job-input"
                                                        placeholder="Enter Zipcode" name="zipcode">
                                                    <div class="loc_icon"><i
                                                            class="fas fa-crosshairs"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label15">Websites<span style="color: red">*</span></label>
                                                <div class="smm_input5">
                                                    <input type="text" class="website-input"
                                                        placeholder="http://entercompanysite.com/" name="website">
                                                    <div class="loc_icon5"><i
                                                            class="fas fa-globe"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="post_jp_btn" type="submit">SAVE
                                                CHANGES</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social_accounts">
                        <div class="view_chart">
                            <div class="view_chart_header">
                                <h4>Social Accounts</h4>
                            </div>
                            <div class="social200">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://facebook.com/johndoe...">
                                                <div class="icon143 f1"><i
                                                        class="fab fa-facebook-f"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://twitter.com/johndoe...">
                                                <div class="icon143 t1"><i class="fab fa-twitter"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://googleplus.com/johndoe...">
                                                <div class="icon143 go1"><i
                                                        class="fab fa-google-plus-g"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://youtube.com/johndoe...">
                                                <div class="icon143 y1"><i class="fab fa-youtube"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://linkedin.com/johndoe...">
                                                <div class="icon143 l1"><i
                                                        class="fab fa-linkedin-in l1"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://instagram.com/johndoe...">
                                                <div class="icon143 i1"><i
                                                        class="fab fa-instagram"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://dribbble.com/johndoe...">
                                                <div class="icon143 d1"><i
                                                        class="fab fa-dribbble d1"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://behance.net/johndoe...">
                                                <div class="icon143 b1"><i
                                                        class="fab fa-behance b1"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="social201">
                                                <input class="scl_input" type="text"
                                                    placeholder="http://github.com/johndoe...">
                                                <div class="icon143 g1"><i
                                                        class="fab fa-github g1"></i></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="post_jp_btn" type="submit">SAVE CHANGES</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="change_password">
                        <div class="view_chart">
                            <div class="view_chart_header">
                                <h4>Change Password</h4>
                            </div>
                            <div class="post_job_body">
                                <form>
                                    <div class="form-group">
                                        <label class="label15">Old Password*</label>
                                        <input type="password" class="job-input"
                                            placeholder="Enter Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="label15">New Password*</label>
                                        <input type="password" class="job-input"
                                            placeholder="Enter New Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="label15">Repeat New Password*</label>
                                        <input type="password" class="job-input"
                                            placeholder="Enter Repeat New Password">
                                    </div>
                                    <button class="post_jp_btn" type="submit">Change
                                        Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="add_employee">
                        <div class="view_chart">
                            <div class="view_chart_header">
                                <h4>Add Employee</h4>
                            </div>
                            <div class="post_job_body">
                                <form>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Profile Picture<span style="color: red">*</span></label>
                                            <div class="avtar_dp">
                                                <img src="images/profile_dp.jpg" alt="">
                                            </div>
                                            <div class="image-upload-wrap1 ml5">
                                                <input class="file-upload-input1" id="file3" type="file"
                                                    onchange="readURL(this);" accept="image/*" name="image">
                                                <div class="drag-text1">
                                                    Upload
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="label15">Full Name<span style="color: red">*</span></label>
                                        <input type="text" class="job-input"
                                            placeholder="Enter Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="label15">Proffession <span style="color: red">*</span></label>
                                        <input type="password" class="job-input"
                                            placeholder="Enter New Password">
                                    </div>

                                </div>
                                    <button class="post_jp_btn" type="submit">Add Employee</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="delete_account" role="tabpanel">
                        <div class="view_chart">
                            <div class="view_chart_header">
                                <h4>Deactivate Account</h4>
                            </div>
                            <div class="post_job_body">
                                <form>
                                    <div class="form-group">
                                        <label class="label15">Please Explain Further**</label>
                                        <textarea class="textarea_input" placeholder="Type"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="label15">Password*</label>
                                        <input type="password" class="job-input"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="email_chk">
                                        <div class="ui checkbox apply_check">
                                            <input type="checkbox">
                                            <label style="color:#242424 !important;">Email Option
                                                Out.</label>
                                        </div>
                                    </div>
                                    <button class="post_jp_btn" type="submit">Deactivate
                                        Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
