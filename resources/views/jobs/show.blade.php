@extends('layouts.app')

@section('content')
	
<div class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="title-bar-text">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="browse_jobs.html">Browser Jobs</a></li>
					<li class="breadcrumb-item active" aria-current="page">Job Single View</li>
				</ol>
			</div>
		</div>
	</div>
</div>


<main class="browse-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="view_details">
					<ul>
						<li>
							<div class="vw_items">
								<i class="fas fa-eye"></i>
								<div class="vw_item_text">
									<h6>Views</h6>
									<span>135</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="fas fa-users"></i>
								<div class="vw_item_text">
									<h6>Applicants</h6>
									<span>4</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="fas fa-briefcase"></i>
								<div class="vw_item_text">
									<h6>Job Type</h6>
									<span>Full Time</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="far fa-money-bill-alt"></i>
								<div class="vw_item_text">
									<h6>Salary</h6>
									<span>$599 - Manual</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="far fa-clock"></i>
								<div class="vw_item_text">
									<h6>Post Date</h6>
									<span>4 days ago</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="job-item ptrl_2 mt-20">
					<div class="job-top-dt">
						<div class="job-left-dt">
							<img src="images/homepage/latest-jobs/img-1.jpg" alt="">
							<div class="job-ut-dts">
								<a href="#">
									<h4>John Doe</h4>
								</a>
								<span><i class="fas fa-map-marker-alt"></i> New York City</span>
							</div>
						</div>
						<div class="job-right-dt">
							<div class="job-price">$599</div>
							<div class="job-fp">Full Time</div>
						</div>
					</div>
					<div class="job-des-dt">
						<h4>UX Designer</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare nisi id mi
							pulvinar tristique. Donec id erat condimentum, posuere nibh a, convallis odio. Aenean et
							tellus risus. Morbi vitae mauris sit amet metus porta varius. Suspendisse potenti. Cras
							felis ipsum, tristique sit amet tortor at, convallis finibus velit. Aenean eget sapien
							at quam suscipit posuere. Phasellus gravida eleifend leo, ac dictum elit tincidunt
							vitae. Aliquam enim nulla, efficitur a augue ut, ultrices convallis ipsum. Integer id ex
							hendrerit, dapibus lectus condimentum, tincidunt lorem. Ut eleifend varius posuere. Sed
							non pharetra odio. Phasellus rhoncus egestas dui, eget interdum tellus volutpat in.
							Phasellus laoreet quam id euismod tristique.</p>
						<div class="job-skills">
							<a href="#">UX</a>
							<a href="#">UI</a>
							<a href="#">Photoshop</a>
							<a href="#">Illustrator</a>
							<a href="#">Corel Draw</a>
							<a href="#">Graphic Design</a>
						</div>
					</div>
					<div class="job_dts">
						<h4>Requirements</h4>
						<ul>
							<li>
								<div class="job_dt_1">
									<h6>Availability :</h6>
									<span>Full Time</span>
								</div>
							</li>
							<li>
								<div class="job_dt_1">
									<h6>Experience Level :</h6>
									<span>Intermediate (3 year - 5 year)</span>
								</div>
							</li>
							<li>
								<div class="job_dt_1">
									<h6>Languages :</h6>
									<span>English</span>
								</div>
							</li>
							<li>
								<div class="job_dt_1">
									<h6>Qualification </h6>
									<span>Bachelor Degree</span>
								</div>
							</li>
						</ul>
					</div>
					<button class="apply_job" type="button" data-toggle="modal"
						data-target="#applyjobModal">APPLY NOW</button>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mainpage">
				<button class="apply_job_rt mtp_30" type="button" data-toggle="modal"
					data-target="#applyjobModal">APPLY NOW</button>
				<div class="bookmark_rt"><button class="bookmark1 mr-3" title="bookmark"><i
							class="fas fa-heart"></i></button>BOOKMARK</div>
				<ul class="social-links">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div>
			<div class="col-12">
				<div class="find-lts-jobs">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-12">
								<div class="main-heading">
									<h2>Similar Jobs</h2>
									<div class="line-shape1">
										<img src="images/line.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-12 col-12">
								<div class="lts-jobs-slider">
									<div class="owl-carousel jobs-owl owl-theme">
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-1.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>John Doe</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i> New York
																City</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$599</div>
														<div class="job-fp">Full Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>UX Designer</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">UX</a>
														<a href="#">UI</a>
														<a href="#">Photoshop</a>
														<a href="#" class="more-skills">+4</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-2.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>Johnson Smith</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i>
																India</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$50/hr</div>
														<div class="job-fp job-prt">Part Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>PHP Developer</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">Php</a>
														<a href="#">Sql</a>
														<a href="#">Javascript</a>
														<a href="#" class="more-skills">+4</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-3.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>Envato</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i>
																Australia</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$900</div>
														<div class="job-fp">Full Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>Wordpress Developer</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">Html</a>
														<a href="#">Css</a>
														<a href="#">Wordpress</a>
														<a href="#" class="more-skills">+4</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-4.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>Joy Smith</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i>
																India</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$500</div>
														<div class="job-fp">Full Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>Graphic Designer</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">Illistrator</a>
														<a href="#">Photoshop</a>
														<a href="#" class="more-skills">+4</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-5.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>Jassica William</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i>
																Australia</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$300</div>
														<div class="job-fp">Full Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>Delivery Boy</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">Delivery</a>
														<a href="#">Local</a>
														<a href="#">Graduation</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="images/homepage/latest-jobs/img-6.jpg"
															alt="">
														<div class="job-ut-dts">
															<a href="#">
																<h4>Gambolthemes</h4>
															</a>
															<span><i class="fas fa-map-marker-alt"></i>
																India</span>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">$60/hr</div>
														<div class="job-fp">Full Time</div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>Front End Developer</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam cursus pulvinar dolor nec...</p>
													<div class="job-skills">
														<a href="#">Html</a>
														<a href="#">Css</a>
														<a href="#">Boostrap</a>
														<a href="#" class="more-skills">+4</a>
													</div>
												</div>
												<div class="job-buttons">
													<ul class="link-btn">
														<li><a href="#" class="link-j1"
																title="Apply Now">APPLY NOW</a></li>
														<li><a href="#" class="link-j1"
																title="View Job">View Job</a></li>
														<li class="bkd-pm"><button class="bookmark1"
																title="bookmark"><i
																	class="fas fa-heart"></i></button></li>
													</ul>
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
		</div>
	</div>
</main>
@endsection