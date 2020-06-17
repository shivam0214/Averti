@extends('layouts.frontapp')

@section('content') 
<section class="wizardform">
<div class="mid">
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 offset-lg-1">
<div class="row shadow">
<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 p-0">
<div class="img">
<div class="pics"></div>
</div>
</div>
<div class="col-sm-12 col-xs-12 col-md-8 col-lg-7 col-xs-12 form-box p-0">
	<div class="mainformright">
	<div class="logoform"><img src="{{asset('assets/frontassets/images/banner/hello.png')}}"></div>
<form role="form" action="{{route('insert')}}" method="post" class="f1">
@csrf

<fieldset>

<h4>Advisor Registration</h4>
<div class="form-group">
<div class="row">
<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="firstname" placeholder="First name" ></div>
<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="lastname" placeholder="Last name" ></div>
</div>
</div>
<div class="form-group">
	<div class="row">
	<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="email" name="email" placeholder="Email Address" ></div>
	</div>
	</div>


	<div class="form-group">
		<div class="row">
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="Company" placeholder="Company name" ></div>
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="Phone_number" placeholder="Phone Number" ></div>
		</div>
		</div>


<section class="wizardform">
	<div class="mid">
		<div class="container">
			<div class="row">
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="Street_Address" placeholder="Street Address" ></div>
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="City" placeholder="City" ></div>
			</div>
			</div>


			<div class="form-group">
				<div class="row">
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="State" placeholder="State" ></div>
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12"><input type="text" name="Postal_code" placeholder="Postal code" ></div>
				</div>
				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="country" placeholder="Country name" ></div>
					</div>
					</div>
<div class="f1-buttons">
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>

<h4>Information</h4>

<div class="form-group">
	<div class="row">
	<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="Lincense_Number" placeholder="Lincense Number" ></div>
	</div>
	</div>

	<div class="form-group">
		<div class="row">
		<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><select name="selectSm" id="SelectLm" class="form-control-sm form-control">
			<option value="">How Did You Hear About Us?</option>
			<option value="1">Option #1</option><option value="2">Option #2</option><option value="3">Option #3</option><option value="4">Option #4</option><option value="5">Option #5</option></select></div>
		</div>
		</div>
	<div class="form-group">
		<div class="row">
		<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="ref" placeholder="Did someone ref you to us?" ></div>
		</div>
		</div>


		<div class="form-group">
			<div class="row">
			<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
				<select name="select_data" id="select_data" class="form-control-sm form-control">
					<option value="">What database program  do you currently Use</option>
					<option value="1">Option #1</option><option value="2">Option #2</option
					><option value="3">Option #3</option><option value="4">Option #4</option>
					<option value="5">Option #5</option></select>	
			</div>
			</div>
			</div>

			<div class="form-group">
				<div class="row">
				<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
					<div class="custom-checkbox">
						<input name="noti_6" class="checkbox-custom" id="noti_6" value="6" type="checkbox">
						<label class="checkbox-custom-label" for="noti_6">I would like to recive the redetails email newsletter</label>
					  </div>
					
				</div>
				</div>
				</div>
				<div class="form-group">
					<div class="row">
					<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
						<div class="custom-checkbox">
							<input name="noti_7" class="checkbox-custom" id="noti_7" value="7" type="checkbox">
							<label class="checkbox-custom-label" for="noti_7">Populate my trail database with sample data</label>
						  </div>
						
					</div>
					</div>
					</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>
<fieldset>
	<h4>Details</h4>
	<div class="form-group">
			<div class="row">
			<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
				<select name="select_data" id="select_data" class="form-control-sm form-control"><option value="">How many total years of investment experience do you have?</option>
				<option value="1">yes</option>
				<option value="2">No</option>
			</select>	
			</div>
			</div>
	</div>
	<div class="f1-buttons">
	<button type="button" class="btn btn-previous">Previous</button>
	<button type="button" class="btn btn-next">Next</button>
	</div>
</fieldset>

<fieldset>

<h4>Advisor Username</h4>


<div class="form-group">
	<div class="row">
	<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="User_name" placeholder="User name" ></div>
	</div>
	</div>

	<div class="form-group">
		<div class="row">
		<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="password" name="Password" placeholder="Password" ></div>
		</div>
		</div>

		<div class="form-group">
			<div class="row">
			<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="password" name="Confirm_Password" placeholder="Confirm Password" ></div>
			</div>
			</div>
		</div>
	</div>
</section>
<!-- form section ending here -->
<!-- newslettar section satrt here -->
<section class="news-letter padding-tb">
	<div class="container">
		<div class="section-header">
			<h2>Subscribe Our Newsletter Get News &amp; Updates</h2>
			<p>Intrinsicly leverage others robust leadership skills without bricks-and-clicks technologies. Distinctively.</p>
		</div>
		<div class="section-wrapper">
			<div class="recent-news">
				<input type="email" name="email" placeholder="Enter Your Email">
				<button type="submit" class="btn">Subscribe Now</button>
			</div>
		</div>
	</div>
</section>
<!-- newslettar section ending here -->
@endsection('content')
