@extends('layouts.app')

@section('content')

<div class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="title-bar-text">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Post a Job</li>
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
					<h2>Post a Job</h2>
					<div class="line-shape1">
						<img src="images/line.svg" alt="">
					</div>
				</div>
				<div class="post501">
					<div>
						@if (session()->has('fail'))
							{{session()->get('fail')}}
						@endif
						@if (session()->has('success'))
						{{session()->get('success')}}
					@endif
					</div>
					<form action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label class="label15">Job Name<span style="color: red">*</span></label>
									<input type="text" class="job-input" placeholder="Job Name Here" name="title">
									@error('title')
									<span style="color: red">{{ $message }}</span>
									@enderror
								</div>
								<div class="form-group">
									<label class="label15">Job Description<span style="color: red">*</span></label>
									<textarea class="textarea_input" placeholder="Type Description" name="description"></textarea>
								</div>
								@error('description')
								<span style="color: red">{{ $message }}</span>
								@enderror
							</div>
							<div class="col-lg-12">
								<div class="requires">
									What are the job requirements
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Job Type<span style="color: red">*</span></label>
									<div class="ui fluid search selection dropdown skills-search">
										<input name="type" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0" >
										<span class="sizer" style=""></span>
										<div class="default text">Select a job</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item selected" data-value="Job1">Job Type 01</div>
											<div class="item" data-value="software and data">software and data</div>
											<div class="item" data-value="maintenance and construction">maintenance and construction</div>
											<div class="item" data-value="auditing and finance">auditing and finance</div>
											<div class="item" data-value="technician">technician</div>
										</div>
									
									</div>
									@error('type')
									<div style="color: red">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Job Category<span style="color: red">*</span></label>
									<div class="ui fluid search selection dropdown skills-search">
										<input  name="category" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0">
										<span class="sizer" style=""></span>
										<div class="default text">Select Category</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item selected" data-value="senior">senior</div>
											<div class="item" data-value="Mid-Level">Mid-Level</div>
											<div class="item" data-value="junior">junior</div>
											
										</div>
									
									</div>
									@error('category')
									<div style="color: red">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Availability<span style="color: red">*</span></label>
									<div class="ui fluid search selection dropdown skills-search">
										<input name="avaliability" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0" >
										<span class="sizer" style=""></span>
										<div class="default text">I’m not sure</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item selected" data-value="Full Time">Full Time</div>
											<div class="item selected" data-value="Part Time">Part Time</div>
										</div>
										
									</div>
									@error('avaliability')
										<div style="color: red">{{ $message }}</div>
										@enderror
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Experience Level<span style="color: red">*</span></label>
									<div class="ui fluid search selection dropdown skills-search">
										<input name="experiencelevel" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0" >
										<span class="sizer" style=""></span>
										<div class="default text">Select Experience Level</div>
										<div class="menu transition hidden" tabindex="-1">
											
											<div class="item" data-value="level1">level 01</div>
											<div class="item" data-value="level2">level 02</div>
											<div class="item" data-value="level3">level 03</div>
											<div class="item" data-value="level4">level 04</div>
											<div class="item" data-value="level5">level 05</div>
											<div class="item" data-value="level6">level 06</div>
											<div class="item" data-value="level7">level 07</div>
											<div class="item" data-value="level8">level 08</div>
											<div class="item" data-value="level9">level 09</div>
											<div class="item" data-value="level10">level 10</div>
										</div>
									
									</div>
									@error('experiencelevel')
											<div style="color: red">{{ $message }}</div>
											@enderror
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Salary Min</label>
									<div class="smm_input">
										<input type="text" class="job-input" placeholder="Min" name="salarymin">
										<div class="mix_max">Usd</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Salary Max</label>
									<div class="smm_input">
										<input type="text" class="job-input" placeholder="Max" name="salarymax">
										<div class="mix_max">Usd</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Location<span style="color: red">*</span></label>
									<div class="smm_input">
										<input type="text" class="job-input" placeholder="Type Address" name="location">
										<div class="loc_icon"><i class="fas fa-map-marker-alt"></i></div>

									</div>
									@error('location')
										<span style="color: red">{{ $message }}</span>
										@enderror
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="label15">Languages<span style="color: red">*</span></label>
									<div class="ui fluid search selection dropdown skills-search">
										<input name="languages" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0" >
										<span class="sizer" style=""></span>
										<div class="default text">Select Language</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item" data-value="lang1">English</div>
											<div class="item" data-value="lang2">Hindi</div>
											<div class="item" data-value="lang3">Punjabi</div>
											<div class="item" data-value="lang4">Bengali</div>
											<div class="item" data-value="lang5">Portuguese</div>
											<div class="item" data-value="lang6">Russian</div>
											<div class="item" data-value="lang7">Japanese</div>
											<div class="item" data-value="lang8">Telugu</div>
											<div class="item" data-value="lang9">French</div>
											<div class="item" data-value="lang10">German</div>
										</div>
									
									</div>
									@error('languages')
									<div style="color: red">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="label15">Skills<span style="color: red">*</span></label>
									<div class="ui fluid multiple search selection dropdown skills-search">
										<input name="skills" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0"><span
											class="sizer" style=""></span>
										<div class="default text">Skills</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item selected" data-value="angular">Angular</div>
											<div class="item" data-value="css">CSS</div>
											<div class="item" data-value="design">Graphic Design</div>
											<div class="item" data-value="ember">Ember</div>
											<div class="item" data-value="html">HTML</div>
											<div class="item" data-value="ia">Information Architecture</div>
											<div class="item" data-value="javascript">Javascript</div>
											<div class="item" data-value="mech">Mechanical Engineering</div>
											<div class="item" data-value="meteor">Meteor</div>
											<div class="item" data-value="node">NodeJS</div>
											<div class="item" data-value="plumbing">Plumbing</div>
											<div class="item" data-value="python">Python</div>
											<div class="item" data-value="rails">Rails</div>
											<div class="item" data-value="react">React</div>
											<div class="item" data-value="repair">Kitchen Repair</div>
											<div class="item" data-value="ruby">Ruby</div>
											<div class="item" data-value="ui">UI Design</div>
											<div class="item" data-value="ux">User Experience</div>
										</div>
									</div>
									@error('skills')
									<div style="color: red">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="label15">Upload Files<span style="color: red">*</span></label>
									<div class="image-upload-wrap1">
										<input class="file-upload-input1" id="file2" type="file"
											onchange="readURL(this);" accept="image/*" name="file">
										<div class="drag-text1">
											Upload Files
										</div>
									</div>
									<p class="upload_dt">Images, Pdf and MS Word Filess</p>
									@error('file')
									<span style="color: red">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-lg-12">
								<button class="post_jp_btn" type="submit">Post a Job</button>
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
						<h4>01. Is there a fee to post a job?</h4>
						<p>There are pricing plans monthly and yearly for jobs on Jobby. It is a paid service that
							we offer bith for the employer and the freelancer.</p>
					</div>
					<div class="jp_faq_item">
						<h4>02. How do I find freelancers for my job?</h4>
						<p>Posting a job on Jobby will get your job in front of the most qualified freelancers and
							agencies. You will then get applications for the job with the applicant’s details and
							reasons why they are the best fit for the job. You can also search for freelancers and
							invite them to apply.</p>
					</div>
					<div class="jp_faq_item">
						<h4>03. How do I pay freelancers and agencies?</h4>
						<p>You’re free to pay your freelancer and agencies. you can pay automatically for their work
							through Paypal, Payoneer, or (which allows you to pay via credit card, debit card).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
	
@endsection