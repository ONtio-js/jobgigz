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
				<div class="messages-sec">
					<div class="row no-gutters">
						<div class="col-xl-4">
							<div class="msgs-list mb30">
								<div class="msg-title1">
									<div class="srch_br">
										<input class="list_search" type="text" placeholder="Search">
										<i class="fas fa-search list_srch_icon"></i>
									</div>
								</div>
								<div class="messages-list scrollstyle_4">
									<ul>
										<li class="active">
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/messages/dp-1.jpg" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Johnson Smith</h3>
													<p>Thanks for the hired me...</p>
												</div>
												<span class="posted_time">1:55 PM</span>
												<span class="msg-notifc">1</span>
											</div>
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/messages/dp-2.jpg" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Rock William</h3>
													<p>Thanks</p>
												</div>
												<span class="posted_time">1:55 PM</span>
											</div>
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/messages/dp-3.jpg" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Jass Singh</h3>
													<p>Payment Received?</p>
												</div>
												<span class="posted_time">1:55 PM</span>
											</div>
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="images/messages/dp-4.jpg" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Norman Kenney</h3>
													<p>Hi! How are you?</p>
												</div>
												<span class="posted_time">1:55 PM</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-md-12 mission-slider">
							<div class="main-conversation-box">
								<div class="message-bar-head">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="images/messages/dp-1.jpg" alt="">
										</div>
										<div class="usr-mg-info">
											<h3>John Doe</h3>
											<p>Online</p>
										</div>
									</div>
									<a href="#" title="" class="ed-opts-open"><i
											class="far fa-trash-alt"></i></a>
								</div>
								<div class="messages-line scrollstyle_4">
									<div class="mCustomScrollbar">
										<div class="main-message-box ta-right">
											<div class="message-dt">
												<div class="message-inner-dt">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Donec rutrum congue leo eget malesuada. Vivamus suscipit
														tortor eget felis porttitor.</p>
												</div>
												<span>Sat, Aug 23, 1:08 PM</span>
											</div>
										</div>
										<div class="main-message-box st3">
											<div class="message-dt st3">
												<div class="message-inner-dt">
													<p>Cras ultricies ligula.</p>
												</div>
												<span>5 minutes ago</span>
											</div>
										</div>
										<div class="main-message-box ta-right">
											<div class="message-dt">
												<div class="message-inner-dt">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Donec rutrum congue leo eget malesuada. Vivamus suscipit
														tortor eget felis porttitor.</p>
												</div>
												<span>Sat, Aug 23, 1:08 PM</span>
											</div>
										</div>
										<div class="main-message-box st3">
											<div class="message-dt st3">
												<div class="message-inner-dt">
													<p>Lorem ipsum dolor sit amet</p>
												</div>
												<span>2 minutes ago</span>
											</div>
										</div>
										<div class="main-message-box ta-right">
											<div class="message-dt">
												<div class="message-inner-dt">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Donec rutrum congue leo eget malesuada. Vivamus suscipit
														tortor eget felis porttitor.</p>
												</div>
												<span>Sat, Aug 23, 1:08 PM</span>
											</div>
										</div>
										<div class="main-message-box st3">
											<div class="message-dt st3">
												<div class="message-inner-dt">
													<p>....</p>
												</div>
												<span>Typing...</span>
											</div>
										</div>
									</div>
								</div>
								<div class="message-send-area">
									<form>
										<div class="mf-field">
											<input type="text" name="message"
												placeholder="Type a message here">
											<button type="submit">Send</button>
										</div>
									</form>
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