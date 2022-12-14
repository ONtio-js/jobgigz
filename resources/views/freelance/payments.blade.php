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
										<a class="nav-link active" href="#payment" id="payment-tab"
											data-toggle="tab">Payments</a>
									</li>
									<li class="nav-item job_nav_item">
										<a class="nav-link" href="#transaction" id="transaction-tab"
											data-toggle="tab">Transactions</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="payment" role="tabpanel">
									<div class="add-ons-dt accordion" id="accordionExample">
										<div class="bookmark_card">
											<button class="bookmark_collapse" data-toggle="collapse"
												data-target="#collapse1" aria-expanded="true"
												aria-controls="collapse1">Earnings</button>
											<div id="collapse1" class="collapse show">
												<div class="card-body">
													<div class="payment_dt">
														<div class="earning_dt">
															<div class="earning_left">
																<h6>Your Earnings</h6>
																<div class="earn_amount">$1500</div>
															</div>
															<div class="earning_right">
																<p>Wallet<a href="#">(Change)</a></p>
																<img src="images/payoneer.png" alt="">
															</div>
														</div>
														<button class="withdraw_btn">WITHDRAW PAYMENT</button>
													</div>
												</div>
											</div>
										</div>
										<div class="bookmark_card">
											<button class="bookmark_collapse" data-toggle="collapse"
												data-target="#collapse2" aria-expanded="true"
												aria-controls="collapse2">Send Payment</button>
											<div id="collapse2" class="collapse show">
												<div class="card-body">
													<div class="send_payment_dt">
														<div class="post_job_body">
															<div class="form-group">
																<label class="label15">Amount*</label>
																<input type="text" class="job-input"
																	placeholder="Enter Amount">
															</div>
															<div class="form-group">
																<label class="label15">Send To*</label>
																<input type="email" class="job-input"
																	placeholder="Enter Email Address">
															</div>
														</div>
														<div class="protection">
															<i class="fas fa-shield-alt"></i>With Jobby payment
															protection, only pay for work delivered.
														</div>
														<div class="post_job_body">
															<div class="ui radio checkbox apply_check">
																<input type="radio" name="example1" checked>
																<label style="color:#242424 !important;">Credit or
																	Debit Cards</label>
															</div>
															<div class="form-group">
																<label class="label15">Card Number*</label>
																<input type="text" class="job-input"
																	placeholder="Enter Card Number">
															</div>
															<div class="form-group">
																<label class="label15">Full Name*</label>
																<input type="text" class="job-input"
																	placeholder="Enter Full Name">
															</div>
															<div class="fdsf452">
																<div class="row">
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label
																				class="label15">Expiring*</label>
																			<input type="text"
																				class="job-input datepicker-here"
																				data-language="en"
																				data-min-view="months"
																				data-view="months"
																				data-date-format="MM yyyy"
																				placeholder="Expiring">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label class="label15">Cvv*</label>
																			<input type="text"
																				class="job-input"
																				placeholder="Enter Cvv">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="post_job_body lineppyl">
															<div class="ui radio checkbox apply_check">
																<input type="radio" name="example1">
																<label
																	style="color:#242424 !important;">Paypal</label>
															</div>
															<div class="form-group">
																<label class="label15">Email Address*</label>
																<input type="email" class="job-input"
																	placeholder="Enter Email Address">
															</div>
															<button class="withdraw_btn">CONTINUE</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="transaction">
									<div class="view_chart">
										<div class="view_chart_header">
											<h4>Transactions</h4>
										</div>
										<div class="transaction_body">
											<div class="table-responsive-md">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Users</th>
															<th scope="col">Projects</th>
															<th scope="col">Payment</th>
															<th scope="col">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">
																<div class="user_dt_trans">
																	<div class="aadd14">Johnson Doe</div>
																	<p>ID No.<a href="#">123456</a></p>
																</div>
															</th>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Travel Wordpress Theme
																	</div>
																	<p>Date :<span>20 oct 2019</span></p>
																</div>
															</td>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Paypal</div>
																	<p>$800</p>
																</div>
															</td>
															<td>
																<div class="trans_badge">Pending</div>
															</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="user_dt_trans">
																	<div class="aadd14">Rock William</div>
																	<p>ID No.<a href="#">123450</a></p>
																</div>
															</th>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Real Estate Psd Template
																	</div>
																	<p>Date :<span>18 oct 2019</span></p>
																</div>
															</td>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Credit Card</div>
																	<p>$1200</p>
																</div>
															</td>
															<td>
																<div class="trans_badge">Received</div>
															</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="user_dt_trans">
																	<div class="aadd14">Jassica Wiliam</div>
																	<p>ID No.<a href="#">123445</a></p>
																</div>
															</th>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Chatting Android App</div>
																	<p>Date :<span>16 oct 2019</span></p>
																</div>
															</td>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Credit Card</div>
																	<p>$2500</p>
																</div>
															</td>
															<td>
																<div class="trans_badge">Send</div>
															</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="user_dt_trans">
																	<div class="aadd14">Albert Smith</div>
																	<p>ID No.<a href="#">123405</a></p>
																</div>
															</th>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Hotel Booking Html Template
																	</div>
																	<p>Date :<span>15 oct 2019</span></p>
																</div>
															</td>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Paypal</div>
																	<p>$2500</p>
																</div>
															</td>
															<td>
																<div class="trans_badge">Send</div>
															</td>
														</tr>
													</tbody>
												</table>
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