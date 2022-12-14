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
						<a href="{{route('logout')}}" class="main_lg_btn">Logout</a>
					</div>
				</div>
				<div class="account_tabs">
					<x-usertabs />
				</div>
				<div class="all_bookmarks">
					<div class="add-ons-dt accordion" id="accordionExample">
						<div class="bookmark_card">
							<button class="bookmark_collapse" data-toggle="collapse" data-target="#collapse1"
								aria-expanded="true" aria-controls="collapse1">Bookmarked Jobs</button>
							<div id="collapse1" class="collapse show">
								<div class="card-body">
									<ul class="all_applied_jobs jobs_bookmarks">
										<li>
											<div class="row">
												<div class="col-md-10">
													<div class="applied_item">
														<h4>Wordpress Developer</h4>
														<ul class="view_dt_job">
															<li>
																<div class="vw1254"><i
																		class="fas fa-map-marker-alt"></i>Australia
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="fas fa-briefcase"></i>Full Time
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="far fa-money-bill-alt"></i>$599 -
																	Manual</div>
															</li>
															<li>
																<div class="vw1254"><i class="far fa-clock"></i>1
																	day ago</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-2">
													<a href="#" class="delete_icon"><i
															class="far fa-trash-alt"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="row">
												<div class="col-md-10">
													<div class="applied_item">
														<h4>Php Developer</h4>
														<ul class="view_dt_job">
															<li>
																<div class="vw1254"><i
																		class="fas fa-map-marker-alt"></i>Australia
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="fas fa-briefcase"></i>Full Time
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="far fa-money-bill-alt"></i>$50 / hr
																</div>
															</li>
															<li>
																<div class="vw1254"><i class="far fa-clock"></i>1
																	day ago</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-2">
													<a href="#" class="delete_icon"><i
															class="far fa-trash-alt"></i></a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="bookmark_card">
							<button class="bookmark_collapse" data-toggle="collapse" data-target="#collapse2"
								aria-expanded="true" aria-controls="collapse2">Bookmarked Projetcs</button>
							<div id="collapse2" class="collapse show">
								<div class="card-body">
									<ul class="all_applied_jobs jobs_bookmarks">
										<li>
											<div class="row">
												<div class="col-md-10">
													<div class="applied_item">
														<h4>I Need a Travel Wordpress Theme</h4>
														<ul class="view_dt_job">
															<li>
																<div class="vw1254"><i
																		class="fas fa-map-marker-alt"></i>New York
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="fas fa-shield-alt"></i>Verified
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="far fa-money-bill-alt"></i>$599 -
																	$2500</div>
															</li>
															<li>
																<div class="vw1254"><i class="far fa-clock"></i>1
																	day ago</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-2">
													<a href="#" class="delete_icon"><i
															class="far fa-trash-alt"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="row">
												<div class="col-md-10">
													<div class="applied_item">
														<h4>I Need a Real Estate Psd Template</h4>
														<ul class="view_dt_job">
															<li>
																<div class="vw1254"><i
																		class="fas fa-map-marker-alt"></i>New York
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="fas fa-shield-alt"></i>Verified
																</div>
															</li>
															<li>
																<div class="vw1254"><i
																		class="far fa-money-bill-alt"></i>$200 -
																	$1000</div>
															</li>
															<li>
																<div class="vw1254"><i class="far fa-clock"></i>2
																	day ago</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-2">
													<a href="#" class="delete_icon"><i
															class="far fa-trash-alt"></i></a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="bookmark_card">
							<button class="bookmark_collapse" data-toggle="collapse" data-target="#collapse3"
								aria-expanded="true" aria-controls="collapse3">Bookmarked Freelancers</button>
							<div id="collapse3" class="collapse show">
								<div class="card-body">
									<ul class="all_applied_jobs jobs_bookmarks">
										<li>
											<div class="job-center-dt">
												<div class="row">
													<div class="col-lg-2 bookmark_img">
														<img src="images/homepage/candidates/img-1.jpg"
															alt="">
													</div>
													<div class="col-lg-3">
														<div class="job-urs-dts tt_left">
															<a href="#">
																<h4>John Doe</h4>
															</a>
															<span>UX Designer</span>
															<div class="avialable">Available Full Time</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="rating-location ff_rating">
															<div class="left-rating">
																<div class="rtitle">Rating</div>
																<div class="star">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span>4.9</span>
																</div>
															</div>
															<div class="right-location">
																<div class="text-left">
																	<div class="rtitle">Location</div>
																	<span><i class="fas fa-map-marker-alt"></i> New
																		York City</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-1">
														<a href="#" class="delete_icon mtb_4"><i
																class="far fa-trash-alt"></i></a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="job-center-dt">
												<div class="row">
													<div class="col-lg-2 bookmark_img">
														<img src="images/homepage/candidates/img-2.jpg"
															alt="">
													</div>
													<div class="col-lg-3">
														<div class="job-urs-dts tt_left">
															<a href="#">
																<h4>Albert Dua</h4>
															</a>
															<span>Wordpress Developer</span>
															<div class="avialable">Available Part Time</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="rating-location ff_rating">
															<div class="left-rating">
																<div class="rtitle">Rating</div>
																<div class="star">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span>4.9</span>
																</div>
															</div>
															<div class="right-location">
																<div class="text-left">
																	<div class="rtitle">Location</div>
																	<span><i class="fas fa-map-marker-alt"></i> New
																		York City</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-1">
														<a href="#" class="delete_icon mtb_4"><i
																class="far fa-trash-alt"></i></a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="bookmark_card">
							<button class="bookmark_collapse" data-toggle="collapse" data-target="#collapse4"
								aria-expanded="true" aria-controls="collapse4">Bookmarked Companies</button>
							<div id="collapse4" class="collapse show">
								<div class="card-body">
									<p class="cmpny_saved">No Company Bookmarked</p>
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