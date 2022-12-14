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
				<div class="total_1254">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="collection_item">
								<div class="coll_icon">
									<i class="fas fa-suitcase col_icon1"></i>
								</div>
								<h4>Applied Jobs</h4>
								<span>30</span>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="collection_item">
								<div class="coll_icon">
									<i class="fas fa-bullseye col_icon2"></i>
								</div>
								<h4>Task Bids Won</h4>
								<span>10</span>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="collection_item">
								<div class="coll_icon">
									<i class="fas fa-heart col_icon3"></i>
								</div>
								<h4>Favourites</h4>
								<span>20</span>
							</div>
						</div>
					</div>
				</div>
				<div class="view_chart">
					<div class="view_chart_header">
						<h4 class="mt-2">Your Profile View</h4>
						<div class="date_selector">
							<div class="ui selection dropdown skills-search vchrt-dropdown">
								<input name="gender" type="hidden" value="default">
								<i class="dropdown icon d-icon"></i>
								<div class="text">Last 6 Months</div>
								<div class="menu">
									<div class="item" data-value="0">Last 6 Months</div>
									<div class="item" data-value="1">This Year</div>
									<div class="item" data-value="2">This Month</div>
								</div>
							</div>
						</div>
					</div>
					<div class="view_chart_body">
						<canvas id="chart" width="890" height="300"
							class="chartjs-render-monitor"></canvas>
					</div>
				</div>
				<div class="dsh150">
					<div class="row">
						<div class="col-lg-6">
							<div class="view_chart">
								<div class="view_chart_header">
									<h4>Static Analytics</h4>
								</div>
								<div class="view_chart_body">
									<div class="pie_chart_view">
										<canvas id="pieChart" width="607" height="303"
											class="chartjs-render-monitor"></canvas>
									</div>
									<ul class="static_list">
										<li>
											<div class="static_items">
												<div class="static_left">
													<div class="color_box" style="background-color: #ff4500;">
													</div>
													<h6>Applied Jobs</h6>
												</div>
												<div class="static_right">
													<span>30</span>
												</div>
											</div>
										</li>
										<li>
											<div class="static_items">
												<div class="static_left">
													<div class="color_box" style="background-color: #49d086;">
													</div>
													<h6>Posted Jobs</h6>
												</div>
												<div class="static_right">
													<span>20</span>
												</div>
											</div>
										</li>
										<li>
											<div class="static_items">
												<div class="static_left">
													<div class="color_box" style="background-color: #b81b7f;">
													</div>
													<h6>Active Bids</h6>
												</div>
												<div class="static_right">
													<span>10</span>
												</div>
											</div>
										</li>
										<li>
											<div class="static_items">
												<div class="static_left">
													<div class="color_box" style="background-color: #efa80f;">
													</div>
													<h6>Favourite Jobs</h6>
												</div>
												<div class="static_right">
													<span>20</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="view_chart">
								<div class="view_chart_header">
									<h4>Notes</h4>
								</div>
								<div class="view_chart_body">
									<ul class="all_notes scrollstyle_4">
										<li>
											<div class="note_item">
												<div class="note_left">
													<div class="priorty">High Priorty</div>
												</div>
												<div class="note_right">
													<button class="note_btn"><i class="far fa-edit"></i></button>
													<button class="note_btn"><i
															class="far fa-trash-alt"></i></button>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
													quis accumsan mi.</p>
											</div>
										</li>
										<li>
											<div class="note_item">
												<div class="note_left">
													<div class="priorty priorty_low">Low Priorty</div>
												</div>
												<div class="note_right">
													<button class="note_btn"><i class="far fa-edit"></i></button>
													<button class="note_btn"><i
															class="far fa-trash-alt"></i></button>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
													quis accumsan mi.</p>
											</div>
										</li>
										<li>
											<div class="note_item">
												<div class="note_left">
													<div class="priorty">High Priorty</div>
												</div>
												<div class="note_right">
													<button class="note_btn"><i class="far fa-edit"></i></button>
													<button class="note_btn"><i
															class="far fa-trash-alt"></i></button>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
													quis accumsan mi.</p>
											</div>
										</li>
										<li>
											<div class="note_item">
												<div class="note_left">
													<div class="priorty priorty_medium">Medium Priorty</div>
												</div>
												<div class="note_right">
													<button class="note_btn"><i class="far fa-edit"></i></button>
													<button class="note_btn"><i
															class="far fa-trash-alt"></i></button>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
													quis accumsan mi.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="add_note">
									<button class="add_note_btn" type="button" data-toggle="modal"
										data-target="#addnoteModal">Add Note</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="dsh150">
					<div class="row">
						<div class="col-lg-7">
							<div class="view_chart">
								<div class="view_chart_header">
									<h4>Applied Jobs</h4>
								</div>
								<div class="view_applied_jobs_body">
									<ul class="all_applied_jobs scrollstyle_4">
										<li>
											<div class="applied_item">
												<a href="#">Wordpress Developer</a>
												<ul class="view_dt_job">
													<li>
														<div class="vw1254"><i
																class="fas fa-map-marker-alt"></i>Australia</div>
													</li>
													<li>
														<div class="vw1254"><i class="fas fa-briefcase"></i>Full
															Time</div>
													</li>
													<li>
														<div class="vw1254"><i
																class="far fa-money-bill-alt"></i>$599 - Manual
														</div>
													</li>
													<li>
														<div class="vw1254"><i class="far fa-clock"></i>1 day ago
														</div>
													</li>
												</ul>
												<div class="btn_link23">
													<button class="apled_btn50">Applied</button>
												</div>
											</div>
										</li>
										<li>
											<div class="applied_item">
												<a href="#">Front End Developer</a>
												<ul class="view_dt_job">
													<li>
														<div class="vw1254"><i
																class="fas fa-map-marker-alt"></i>Australia</div>
													</li>
													<li>
														<div class="vw1254"><i class="fas fa-briefcase"></i>Part
															Time</div>
													</li>
													<li>
														<div class="vw1254"><i
																class="far fa-money-bill-alt"></i>$50 / hr</div>
													</li>
													<li>
														<div class="vw1254"><i class="far fa-clock"></i>2 day ago
														</div>
													</li>
												</ul>
												<div class="btn_link23">
													<button class="apled_btn50">Applied</button>
												</div>
											</div>
										</li>
										<li>
											<div class="applied_item">
												<a href="#">Back End Developer</a>
												<ul class="view_dt_job">
													<li>
														<div class="vw1254"><i
																class="fas fa-map-marker-alt"></i>India</div>
													</li>
													<li>
														<div class="vw1254"><i class="fas fa-briefcase"></i>Full
															Time</div>
													</li>
													<li>
														<div class="vw1254"><i
																class="far fa-money-bill-alt"></i>$1200 - Fixed
														</div>
													</li>
													<li>
														<div class="vw1254"><i class="far fa-clock"></i>4 day ago
														</div>
													</li>
												</ul>
												<div class="btn_link23">
													<button class="apled_btn50">Applied</button>
												</div>
											</div>
										</li>
										<li>
											<div class="applied_item">
												<a href="#">Wordpress Developer</a>
												<ul class="view_dt_job">
													<li>
														<div class="vw1254"><i
																class="fas fa-map-marker-alt"></i>Australia</div>
													</li>
													<li>
														<div class="vw1254"><i class="fas fa-briefcase"></i>Full
															Time</div>
													</li>
													<li>
														<div class="vw1254"><i
																class="far fa-money-bill-alt"></i>$700 - Manual
														</div>
													</li>
													<li>
														<div class="vw1254"><i class="far fa-clock"></i>5 day ago
														</div>
													</li>
												</ul>
												<div class="btn_link23">
													<button class="apled_btn50">Applied</button>
												</div>
											</div>
										</li>
									</ul>
									<a href="#" class="btn-veiw10">View All</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="view_chart">
								<div class="view_chart_header">
									<h4>Order Plans Summery</h4>
								</div>
								<div class="view_applied_jobs_body">
									<ul class="all_paid_plans scrollstyle_4">
										<li>
											<div class="plan_dts">
												<div class="plan_dt_left">
													<h4>Professional Plans</h4>
													<p>Order No : #12345</p>
													<p>Date : 10 October 2018</p>
												</div>
												<div class="plan_dt_right">
													<button class="paid_btn">Paid</button>
												</div>
											</div>
										</li>
										<li>
											<div class="plan_dts">
												<div class="plan_dt_left">
													<h4>Professional Plans</h4>
													<p>Order No : #12358</p>
													<p>Date : 10 September 2018</p>
												</div>
												<div class="plan_dt_right">
													<button class="paid_btn">Paid</button>
												</div>
											</div>
										</li>
										<li>
											<div class="plan_dts">
												<div class="plan_dt_left">
													<h4>Professional Plans</h4>
													<p>Order No : #12358</p>
													<p>Date : 10 August 2018</p>
												</div>
												<div class="plan_dt_right">
													<button class="paid_btn">Paid</button>
												</div>
											</div>
										</li>
										<li>
											<div class="plan_dts">
												<div class="plan_dt_left">
													<h4>Professional Plans</h4>
													<p>Order No : #12365</p>
													<p>Date : 10 July 2018</p>
												</div>
												<div class="plan_dt_right">
													<button class="paid_btn">Paid</button>
												</div>
											</div>
										</li>
									</ul>
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