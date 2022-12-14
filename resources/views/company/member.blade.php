@extends('layouts.app')

@section('content')

<div class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="title-bar-text">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Company Profile</li>
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
						<img src="images/company/img-5.jpg" alt="">
						<div class="job-urs-dts">
							<h4>WP Market</h4>
						</div>
						<ul class="user_btns">
							<li><button class="hire_btn" type="button">Message</button></li>
						</ul>
					</div>
					<div class="my_websites">
						<ul>
							<li><a href="#" class="web_link"><i
										class="fas fa-globe"></i>www.companysite.com</a></li>
							<li><a href="#" class="web_link"><i
										class="far fa-edit"></i>www.blogsite.com</a></li>
							<li><a href="#" class="web_link"><i
										class="fas fa-columns"></i>www.portfoliosite.com</a></li>
						</ul>
					</div>
					<div class="group_skills_bar">
						<h6>Profile Completeness</h6>
						<div class="group_bar1">
							<span>75%</span>
							<div class="progress skill_process">
								<div class="progress-bar progress_bar_skills" role="progressbar"
									style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
									aria-valuemax="100"></div>
							</div>
						</div>
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
                <x-company-tab />
				<div class="view_chart">
					<div class="view_chart_header">
						<h4 class="mt-1">4 Members</h4>
					</div>
					<div class="job_bid_body">
						<ul class="all_applied_jobs jobs_bookmarks">
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-12">
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
								</div>
							</li>
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-12">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-6.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Albert Dua</a>
													<div class="candi_cate">Wordpress Developer</div>
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
								</div>
							</li>
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-12">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-3.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Rock WIlliam</a>
													<div class="candi_cate">Php Developer</div>
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
								</div>
							</li>
							<li>
								<div class="applied_candidates_item">
									<div class="row">
										<div class="col-xl-12">
											<div class="applied_candidates_dt">
												<div class="candi_img">
													<img src="images/homepage/candidates/img-4.jpg"
														alt="">
												</div>
												<div class="candi_dt">
													<a href="#">Joy Smith</a>
													<div class="candi_cate">Web Developer</div>
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
