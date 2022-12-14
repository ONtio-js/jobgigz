@extends('layouts.app')

@section('content')
<div class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="title-bar-text">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">My Account</li>
				</ol>
			</div>
		</div>
	</div>
</div>


<main class="browse-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="account_dt_left">
					<div class="job-center-dt">
						<img src="images/homepage/candidates/img-1.jpg" alt="">
						<div class="job-urs-dts">
							<div class="dp_upload">
								<input type="file" id="file">
								<label for="file">Upload Photo</label>
							</div>
							<h4>John Doe</h4>
							<span>UX Designer</span>
							<div class="avialable">Available Full Time<a href="#"><i
										class="far fa-edit"></i></a></div>
						</div>
					</div>
					<div class="my_websites">
						<ul>
							<li><a href="#" class="web_link"><i
										class="fas fa-globe"></i>www.companysite.com</a></li>
							<li><a href="#" class="web_link"><i
										class="far fa-edit"></i>www.blogsite.com</a></li>
						</ul>
					</div>
					<div class="group_skills_bar">
						<h6>Profile Completeness</h6>
						<div class="group_bar1">
							<span>85%</span>
							<div class="progress skill_process">
								<div class="progress-bar progress_bar_skills" role="progressbar"
									style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
									aria-valuemax="100"></div>
							</div>
						</div>
						<a href="#" class="skiils_button">Complete Required Skills</a>
					</div>
					<div class="rlt_section">
						<div class="rtl_left">
							<h6>Rating</h6>
						</div>
						<div class="rtl_right">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<span>4.9</span>
							</div>
						</div>
					</div>
					<div class="rlt_section">
						<div class="rtl_left">
							<h6>Location</h6>
						</div>
						<div class="rtl_right">
							<span><i class="fas fa-map-marker-alt lc_icon"></i> Ludhiana, India</span>
						</div>
						<div class="my_location">
							<div id="map"></div>
						</div>
						<ul class="rlt_section2">
							<li>
								<div class="rtl_left2">
									<h6>Hourly Rate</h6>
								</div>
								<div class="rtl_right2">
									<span>$50 / hr</span>
								</div>
							</li>
							<li>
								<div class="rtl_left2">
									<h6>Age</h6>
								</div>
								<div class="rtl_right2">
									<span>28</span>
								</div>
							</li>
							<li>
								<div class="rtl_left2">
									<h6>Experenice</h6>
								</div>
								<div class="rtl_right2">
									<span>5 Year</span>
								</div>
							</li>
							<li>
								<div class="rtl_left2">
									<h6>Job Done</h6>
								</div>
								<div class="rtl_right2">
									<span>69</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="social_section3 mb80">
						<div class="social_leftt3">
							<h6>Contact Social Account</h6>
						</div>
						<div class="social_right3">
							<a href="#"><i class="far fa-edit"></i></a>
						</div>
						<ul class="social_accounts">
							<li><a href="#" class="social_links"><i
										class="fab fa-facebook-f f1"></i>http://facebook.com/johndoe</a></li>
							<li><a href="#" class="social_links"><i
										class="fab fa-twitter t1"></i>http://twitter.com/johndoe</a></li>
							<li><a href="#" class="social_links"><i
										class="fab fa-linkedin-in l1"></i>http://linkedin.com/johndoe</a></li>
							<li><a href="#" class="social_links"><i
										class="fab fa-dribbble d1"></i>http://dribbble.com/johndoe</a></li>
							<li><a href="#" class="social_links"><i
										class="fab fa-behance b1"></i>http://behance.net/johndoe</a></li>
							<li><a href="#" class="social_links"><i
										class="fab fa-github g1"></i>http://github.com/johndoe</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 mainpage">
				<div class="account_heading">
					<div class="account_hd_left">
						<h2>Manage Your Account</h2>
					</div>
					<div class="account_hd_right">
						<a href="#" class="main_lg_btn">Logout</a>
					</div>
				</div>
				<div class="account_tabs">
					<x-usertabs />
				</div>
				<div class="jobs_manage">
					<div class="row">
						<div class="col-lg-3">
							<div class="jobs_tabs">
								<ul class="nav job_nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" href="#my_profile" id="my-profile-tab"
											data-toggle="tab">My Profile</a>
									</li>
									<li class="nav-item job_nav_item">
										<a class="nav-link" href="#social_accounts" id="social-accounts-tab"
											data-toggle="tab">Social Accounts</a>
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
											<form>
												<div class="row">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="label15">Profile Avtar*</label>
															<div class="avtar_dp">
																<img src="images/profile_dp.jpg" alt="">
															</div>
															<div class="image-upload-wrap1 ml5">
																<input class="file-upload-input1" id="file3"
																	type="file" onchange="readURL(this);"
																	accept="image/*">
																<div class="drag-text1">
																	Upload Files
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">First Name*</label>
															<input type="text" class="job-input"
																placeholder="Your First Name">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Last Name*</label>
															<input type="text" class="job-input"
																placeholder="Your Last Name">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Email Address*</label>
															<input type="email" class="job-input"
																placeholder="Enter Your Email Address">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Birthday*</label>
															<div class="smm_input">
																<input type="text"
																	class="job-input datepicker-here"
																	data-language="en"
																	placeholder="Enter Your Birth Date">
																<div class="mix_max"><i
																		class="fas fa-calendar-alt"></i></div>
															</div>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<label class="label15">Description*</label>
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
																	placeholder="Describe your experience, skills, etc. In complete details. This is your chance to show off."></textarea>
															</div>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<label class="label15">Tagline*</label>
															<input type="email" class="job-input"
																placeholder="Wordpress Developer">
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<label class="label15">Skills*</label>
															<div
																class="ui fluid multiple search selection dropdown skills-search">
																<input name="tags" type="hidden"
																	value="">
																<i class="dropdown icon"></i>
																<input class="search" autocomplete="off"
																	tabindex="0"><span class="sizer"
																	style=""></span>
																<div class="default text">Skills</div>
																<div class="menu transition hidden"
																	tabindex="-1">
																	<div class="item selected"
																		data-value="angular">Angular</div>
																	<div class="item" data-value="css">CSS</div>
																	<div class="item" data-value="design">
																		Graphic Design</div>
																	<div class="item" data-value="ember">Ember
																	</div>
																	<div class="item" data-value="html">HTML
																	</div>
																	<div class="item" data-value="ia">
																		Information Architecture</div>
																	<div class="item" data-value="javascript">
																		Javascript</div>
																	<div class="item" data-value="mech">
																		Mechanical Engineering</div>
																	<div class="item" data-value="meteor">Meteor
																	</div>
																	<div class="item" data-value="node">NodeJS
																	</div>
																	<div class="item" data-value="plumbing">
																		Plumbing</div>
																	<div class="item" data-value="python">Python
																	</div>
																	<div class="item" data-value="rails">Rails
																	</div>
																	<div class="item" data-value="react">React
																	</div>
																	<div class="item" data-value="repair">
																		Kitchen Repair</div>
																	<div class="item" data-value="ruby">Ruby
																	</div>
																	<div class="item" data-value="ui">UI Design
																	</div>
																	<div class="item" data-value="ux">User
																		Experience</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Availability*</label>
															<div
																class="ui fluid search selection dropdown skills-search">
																<input name="tags" type="hidden"
																	value="">
																<i class="dropdown icon"></i>
																<input class="search" autocomplete="off"
																	tabindex="0">
																<span class="sizer" style=""></span>
																<div class="default text">I???m not sure</div>
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
															<label class="label15">Experience Level*</label>
															<div
																class="ui fluid search selection dropdown skills-search">
																<input name="tags" type="hidden"
																	value="">
																<i class="dropdown icon"></i>
																<input class="search" autocomplete="off"
																	tabindex="0">
																<span class="sizer" style=""></span>
																<div class="default text">Select Experience Level
																</div>
																<div class="menu transition hidden"
																	tabindex="-1">
																	<div class="item" data-value="level1">level
																		01</div>
																	<div class="item" data-value="level2">level
																		02</div>
																	<div class="item" data-value="level3">level
																		03</div>
																	<div class="item" data-value="level4">level
																		04</div>
																	<div class="item" data-value="level5">level
																		05</div>
																	<div class="item" data-value="level6">level
																		06</div>
																	<div class="item" data-value="level7">level
																		07</div>
																	<div class="item" data-value="level8">level
																		08</div>
																	<div class="item" data-value="level9">level
																		09</div>
																	<div class="item" data-value="level10">level
																		10</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Pay Rate ($/hr)*</label>
															<div class="smm_input">
																<input type="text" class="job-input"
																	placeholder="Enter Your Page Rate">
																<div class="mix_max">Usd</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label15">Languages*</label>
															<div
																class="ui fluid search selection dropdown skills-search">
																<input name="tags" type="hidden"
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
															<label class="label15">Location*</label>
															<div class="smm_input">
																<input type="text" class="job-input"
																	placeholder="Type Address">
																<div class="loc_icon"><i
																		class="fas fa-crosshairs"></i></div>
															</div>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<label class="label15">Websites*</label>
															<div class="smm_input5">
																<input type="text" class="website-input"
																	placeholder="http://entercompanysite.com/">
																<div class="loc_icon5"><i
																		class="fas fa-globe"></i></div>
															</div>
															<div class="smm_input5">
																<input type="text" class="website-input"
																	placeholder="http://enterblogsite.com/">
																<div class="loc_icon5"><i class="far fa-edit"></i>
																</div>
															</div>
															<div class="smm_input5">
																<input type="text" class="website-input"
																	placeholder="http://enterportfoliosite.com/">
																<div class="loc_icon5"><i
																		class="fas fa-columns"></i></div>
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
		</div>
	</div>
</main>
@endsection