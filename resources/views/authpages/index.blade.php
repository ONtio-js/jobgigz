@extends('layouts.auth')

@section('content')
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="browse-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main-heading">
					<h2>Sign Up</h2>
					<div class="line-shape1">
						<img src="images/line.svg" alt="">
					</div>
				</div>
				<div class="choose_profile">
					<h3>Choose Your Profile</h3>
					<p>Which type of profile fits you best?</p>
				</div>
				<div class="plans150">
					<div class="row justify-content-md-center">
						<div class="col-lg-4 col-md-4">
							<div class="plan_item">
								<div class="plan_icon1">
									<div class="cfp_icon">
										<img src="images/cp_icon.svg" alt="">
									</div>
								</div>
								<h4>Freelancer</h4>
								<div class="plan_price1">
									<span>Start a Freelancer Profile</span>
								</div>
								<ul class="plan_dt1">
									<li>
										<p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
									</li>
									<li>
										<p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit
											amet felis nec nulla imperdiet varius.</p>
									</li>
								</ul>
								<div class="plan_btn">
									<a href="{{route('freelance-reg')}}">Signup Freelancer Profile</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="plan_item">
								<div class="plan_icon1">
									<div class="cfp_icon">
										<img src="images/fp_icon.svg" alt="">
									</div>
								</div>
								<h4>Company</h4>
								<div class="plan_price1">
									<span>Start a Company Profile</span>
								</div>
								<ul class="plan_dt1">
									<li>
										<p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
									</li>
									<li>
										<p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit
											amet felis nec nulla imperdiet varius.</p>
									</li>
								</ul>
								<div class="plan_btn">
									<a href="{{route('company-reg')}}">Signup Company Profile</a>
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
