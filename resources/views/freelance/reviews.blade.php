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
					<x-usertabs :class="active" />
				</div>
				<div class="view_chart">
					<div class="view_chart_header">
						<h4 class="mt-1">All Reviews</h4>
						<div class="review_right">
							<button class="add_review_btn" type="button" data-toggle="modal"
								data-target="#addreviewModal">Add Review</button>
						</div>
					</div>
					<div class="job_bid_body">
						<ul class="all_applied_jobs jobs_bookmarks">
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-7">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-2.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Johnson Dua</a>
													<div class="candi_cate">UX Designer</div>
													<div class="rating_candi">Rating
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
											</div>
										</div>
									</div>
									<div class="btn_link24 review_user">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
											elementum, nibh et aliquam pellentesque, risus libero aliquet dolor,
											quis hendrerit nisi augue et purus.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-7">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-5.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Jassica William</a>
													<div class="candi_cate">Freelancer</div>
													<div class="rating_candi">Rating
														<div class="star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<span>5.0</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="btn_link24 review_user">
										<p>Awesome work, definitely will rehire. Poject was completed not only with
											the requirements, but on time, within our small budget.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-7">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-3.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Joginder Singh</a>
													<div class="candi_cate">Employer</div>
													<div class="rating_candi">Rating
														<div class="star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<span>4.5</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="btn_link24 review_user">
										<p>Fusce sodales consectetur lacus eu vestibulum. Orci varius natoque
											penatibus et magnis dis parturient montes, nascetur ridiculus mus.
											Aenean consequat velit aliquet tortor scelerisque</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
	
@endsection