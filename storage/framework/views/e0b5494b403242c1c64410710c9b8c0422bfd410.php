<?php $__env->startSection('content'); ?> 
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
	<div class="logoform"><img src="<?php echo e(asset('assets/frontassets/images/banner/hello.png')); ?>"></div>
<form role="form" action="<?php echo e(route('insert')); ?>" method="post" class="f1">
<?php echo csrf_field(); ?>

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


		<div class="form-group">
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
	<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="Lincense Number" placeholder="Lincense Number" ></div>
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
				<div class="form-group">
					<div class="row">
						<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
						<div class="custom-checkbox">
							<input name="noti_7" class="checkbox-custom" id="noti_7" value="7" type="checkbox">
						</div>
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
	<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="text" name="User name" placeholder="User name" ></div>
	</div>
	</div>

	<div class="form-group">
		<div class="row">
		<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="password" name="Password" placeholder="Password" ></div>
		</div>
		</div>

		<div class="form-group">
			<div class="row">
			<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12"><input type="password" name="Confirm Password" placeholder="Confirm Password" ></div>
			</div>
			</div>


<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>

<h4>Introduction</h4>

<div class="introtitle">
<p class="boldfont">
Before we can create your life and financial plan, we need to find out what you are looking for and what you value most.

</p>
	
</div>


<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>


<fieldset>

<h4>What?</h4>

<p class="colorchange">Are you looking for holistic approach to life and money management?</p>
<div class="form-group">
	<div class="row">
	<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
		<div class="custom-checkbox">
			<input name="noti_8" class="checkbox-custom" id="noti_8" value="8" type="checkbox">
			<label class="checkbox-custom-label" for="noti_8">Yes</label>
		  </div>
		
	</div>


	<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
		<div class="custom-checkbox">
			<input name="noti_9" class="checkbox-custom" id="noti_9" value="9" type="checkbox">
			<label class="checkbox-custom-label" for="noti_9">No</label>
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

	<h4>Where?</h4>
	
	<p class="colorchange">What services are you most interested in receiving help with?</p>
	<div class="form-group">
		<div class="row">
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="custom-checkbox">
				<input name="noti_11" class="checkbox-custom" id="noti_11" value="11" type="checkbox">
				<label class="checkbox-custom-label" for="noti_11">Estate Planning</label>
			  </div>
			
		</div>
	
	
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="custom-checkbox">
				<input name="noti_12" class="checkbox-custom" id="noti_12" value="12" type="checkbox">
				<label class="checkbox-custom-label" for="noti_12">Life And Money Management</label>
			  </div>
			
		</div>


		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="custom-checkbox">
				<input name="noti_13" class="checkbox-custom" id="noti_13" value="13" type="checkbox">
				<label class="checkbox-custom-label" for="noti_13">Cash Flow / Budgeting</label>
			  </div>
			
		</div>


		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="custom-checkbox">
				<input name="noti_14" class="checkbox-custom" id="noti_14" value="14" type="checkbox">
				<label class="checkbox-custom-label" for="noti_14">All Of The Above</label>
			  </div>
			
		</div>
		</div>
		</div>
	<div class="clearfix"></div>
	<p class="colorchange">What services are you most interested in receiving help with?</p>
	<div class="form-group">
		<div class="row">
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="rdio rdio-primary radio-inline"> <input name="radio" value="1" id="radio1" type="radio" >
				<label for="radio1">Single</label>
			  </div>
			
		</div>
	
	
		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="rdio rdio-primary radio-inline"> <input name="radio" value="2" id="radio2" type="radio" >
				<label for="radio2">Married</label>
			  </div>
			
		</div>


		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="rdio rdio-primary radio-inline"> <input name="radio" value="3" id="radio3" type="radio" >
				<label for="radio3">Widow</label>
			  </div>
			
		</div>


		<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
			<div class="rdio rdio-primary radio-inline"> <input name="radio" value="4" id="radio4" type="radio" >
				<label for="radio4">Divorce</label>
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

		<h4>ASSETS</h4>
		
		<div class="form-group">
		<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<select name="assets" id="assets" class="form-control-sm form-control"><option value="">Assets</option><option value="1">0-99,999</option><option value="2">100,000-250,000</option><option value="3">250,001-500,000</option><option value="4">500,001-1,000,000</option></select>
		
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<select name="age" id="age" class="form-control-sm form-control"><option value="">Age</option><option value="1">21-35</option><option value="2">36-45</option><option value="3">46-55</option><option value="4">56-75</option><option value="5">75+</option></select>
		
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<select name="life_happiness" id="Select" class="form-control-sm form-control"><option value="">Life Happiness</option><option value="1">Over the moon</option><option value="2">Very Happy</option><option value="3">UnHappy</option><option value="4">Depressed</option></select>
			
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<select name="select" id="Select" class="form-control-sm form-control"><option value="0">Financial Awareness</option><option value="1">Financially Confident</option><option value="2">Financially Aware</option><option value="3">Financially Chanllenged</option></select>
			
			</div>
			</div>
		
		
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<select name="retirement_goal" id="Select" class="form-control-sm form-control"><option value="">Retirement Goal</option><option value="1">0-5</option><option value="2">6-10</option><option value="3">11-15</option></select>
				
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<select name="select" id="Select" class="form-control-sm form-control"><option value="">Money Meaning</option><option value="1">Freedom</option><option value="2">Control</option><option value="3">Security</option><option value="4">All the above</option></select>
				
				</div>
				</div>
		
		
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<select name="select" id="Select" class="form-control-sm form-control"><option value="0">Financial Desision Maker</option><option value="1">Me</option><option value="2">Partner</option><option value="3">Both</option><option value="4">Outside Source</option></select>
					
					</div>
			
					</div>
		</div>
		
		<div class="f1-buttons">
		<button type="button" class="btn btn-previous">Previous</button>
		<button type="button" class="btn btn-next">Next</button>
		</div>
		</fieldset>
		

	<fieldset>

		<h4>Risk</h4>
		

		<div class="form-group">
			<div class="row">
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
				<div class="custom-checkbox">
					<input name="noti_15" class="checkbox-custom" id="noti_15" value="15" type="checkbox">
					<label class="checkbox-custom-label" for="noti_15">Aggressive</label>
				  </div>
				
			</div>
		
		
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
				<div class="custom-checkbox">
					<input name="noti_16" class="checkbox-custom" id="noti_16" value="16" type="checkbox">
					<label class="checkbox-custom-label" for="noti_16">Moderately Aggressive</label>
				  </div>
				
			</div>
	
	
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
				<div class="custom-checkbox">
					<input name="noti_17" class="checkbox-custom" id="noti_17" value="17" type="checkbox">
					<label class="checkbox-custom-label" for="noti_17">Moderate</label>
				  </div>
				
			</div>
	
	
			<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
				<div class="custom-checkbox">
					<input name="noti_18" class="checkbox-custom" id="noti_18" value="18" type="checkbox">
					<label class="checkbox-custom-label" for="noti_18">Conservative</label>
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
	
			<h4>When</h4>
			
	
			<div class="form-group">
				<div class="row">
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
					<div class="custom-checkbox">
						<input name="noti_19" class="checkbox-custom" id="noti_19" value="19" type="checkbox">
						<label class="checkbox-custom-label" for="noti_19">ASAP</label>
					  </div>
					
				</div>
			
			
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
					<div class="custom-checkbox">
						<input name="noti_20" class="checkbox-custom" id="noti_20" value="20" type="checkbox">
						<label class="checkbox-custom-label" for="noti_20">Week from Now</label>
					  </div>
					
				</div>
		
		
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
					<div class="custom-checkbox">
						<input name="noti_21" class="checkbox-custom" id="noti_21" value="21" type="checkbox">
						<label class="checkbox-custom-label" for="noti_21">Month From Now</label>
					  </div>
					
				</div>
		
		
				<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
					<div class="custom-checkbox">
						<input name="noti_22" class="checkbox-custom" id="noti_22" value="22" type="checkbox">
						<label class="checkbox-custom-label" for="noti_22">With six Months</label>
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
<h4>Why?</h4>


<div class="form-group">
<p class="colorchange">What type of planning do you want to get started ?</p>
	<div class="row">
    <div class="col-sm-12">
		<select name="planning" id="Select" class="form-control-sm form-control"><option value="0">Select Option</option><option value="1">Financial Planning</option><option value="2">Life Management</option><option value="3">Income Planning</option><option value="4">Investments</option></select>
    </div>
  </div>
 
</div>


<div class="form-group">
	<p class="colorchange">How much do you have allocated for these services?</p>
		<div class="row">
		<div class="col-sm-12">
			<select name="services" id="Select" class="form-control-sm form-control"><option value="0">Select Option</option><option value="1">2500-5000</option><option value="2">5001-7000</option><option value="3">7001-10000</option><option value="4">10000+</option></select>
		</div>
	  </div>
	 
	</div>
	

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>





<fieldset>

<h4>As, we've found three great advisor matches for you!</h4>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<div class="form-group">
<input type="text" name="f1-email" placeholder="Phone Number" class="f1-email form-control" id="located">
<input type="email" name="f1-email" placeholder="Email Address" class="f1-email form-control" id="located">
</div>


<div class="f1-buttons">

<button type="button" class="btn btn-previous">Decline</button>
<button type="submit" class="btn btn-submit">Accept</button>
</div>
</fieldset>

<div class="f1-steps">
<div class="f1-progress">
<div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
</div>
<div class="f1-step active">


</div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
</div>
</form>
</div>
</div>
 </div>
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
				<p>Intrinsicly leverage other's robust leadership skills without bricks-and-clicks technologies. Distinctively.</p>
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
     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/frontview/advisorquestion/advisorquestion.blade.php ENDPATH**/ ?>