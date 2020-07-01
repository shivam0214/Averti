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
								<div class="logoform">
									<img src="<?php echo e(asset('assets/frontassets/images/banner/hello.png')); ?>">
								</div>
								<form role="form" id="advisorfm" action="<?php echo e(route('insert')); ?>" method="post" class="f1">
								<div class="backloader"><div class="loader"></div></div>
								
									<?php echo csrf_field(); ?>
									<fieldset>
										<h4>Advisor Registration</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="firstname" placeholder="First name">
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="lastname" placeholder="Last name">
												</div>
											</div>
										</div>
										
										<div class="form-group">
										
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12" style="text-align: left;">
												<span id="checkidmsg"></span>
													<input id="checkemail" type="email" name="email" placeholder="Email Address">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="companyname" placeholder="Company name">
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="phonenumber" placeholder="Phone Number">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="streetaddress" placeholder="Street Address">
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="city" placeholder="City">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="state" placeholder="State">
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<input type="text" name="postalcode" placeholder="Postal code">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<input type="text" name="country" placeholder="Country name">
												</div>
											</div>
										</div>
										<div class="f1-buttons">
											<button type="button" class="btn btn-next" onclick="">Next</button>
											
										</div>
									</fieldset>
									<fieldset>
										<h4>Information</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<select name="advisortype" id="SelectLm" class="form-control-sm form-control" required>
														<option value="" >Choose your Advisor Type</option>
														
														<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($record['id']); ?>"><?php echo e($record['category_name']); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<input type="text" name="lincensenumber" placeholder="Lincense Number">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<select name="howyouknowboutus" id="SelectLm" class="form-control-sm form-control">
														<option value="">How Did You Hear About Us?</option>
														<option value="1">Less than 1</option>
														<option value="2">1-5</option>
														<option value="3">6-10</option>
														<option value="4">10-15</option>
														<option value="5">15+</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<input type="text" name="ref" placeholder="Did someone ref you to us?">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<select name="databaseselect_data" id="select_data" class="form-control-sm form-control">
														<option value="">How did you hear about Site</option>
														<option value="1">News Artical</option>
														<option value="2">Google</option>
														<option value="3">Averti team contact you</option>
														<option value="3">Advisor Referral</option>
														<option value="3">Other</option>

													</select>
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
											<button type="button" class="btn btn-next" onclick="step2()">Next</button>
										</div>
									</fieldset>
									<fieldset>
										<h4>Advisor Username</h4>
										
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<input type="password" name="password" placeholder="Password">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
													<input type="password" name="confirmpassword" placeholder="Confirm Password">
												</div>
											</div>
										</div>
										<div class="f1-buttons">
											<button type="button" class="btn btn-previous">Previous</button>
											<button type="button" class="btn btn-next" onclick="step3()">Next</button>
										</div>
									</fieldset>
									<fieldset>
										<h4>Introduction</h4>
										<div class="introtitle">
											<p class="boldfont">Before we can create your life and financial plan, we need to find out what you are looking for and what you value most.</p>
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
														<input name="lookingforholastic" class="checkbox-custom" id="noti_8" value="1" type="radio">
														<label class="checkbox-custom-label" for="noti_8">Yes</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="lookingforholastic" class="checkbox-custom" id="noti_9" value="0" type="radio">
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
														<input name="mostinterested" class="checkbox-custom" id="noti_11" value="Estate Planning" type="checkbox">
														<label class="checkbox-custom-label" for="noti_11">Estate Planning</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="noti_12" class="checkbox-custom" id="noti_12" value="Life And Money Management" type="checkbox">
														<label class="checkbox-custom-label" for="noti_12">Life And Money Management</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="noti_13" class="checkbox-custom" id="noti_13" value="Cash Flow / Budgeting" type="checkbox">
														<label class="checkbox-custom-label" for="noti_13">Cash Flow / Budgeting</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="noti_14" class="checkbox-custom" id="noti_14" value="All Of The Above" type="checkbox">
														<label class="checkbox-custom-label" for="noti_14">All Of The Above</label>
													</div>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<p class="colorchange">Where are you now? Status?</p>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Single" id="radio1" type="radio">
														<label for="radio1">Single</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Married" id="radio2" type="radio">
														<label for="radio2">Married</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Widow" id="radio3" type="radio">
														<label for="radio3">Widow</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Divorce" id="radio4" type="radio">
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
													<select name="assets" id="assets" class="form-control-sm form-control">
														<option value="">Assets</option>
														<option value="0-99,999">0-99,999</option>
														<option value="100,000-250,000">100,000-250,000</option>
														<option value="250,001-500,000">250,001-500,000</option>
														<option value="500,001-1,000,000">500,001-1,000,000</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="age" id="age" class="form-control-sm form-control">
														<option value="">Age</option>
														<option value="21-35">21-35</option>
														<option value="36-45">36-45</option>
														<option value="46-55">46-55</option>
														<option value="56-75">56-75</option>
														<option value="75">75+</opton>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="life_happiness" id="Select" class="form-control-sm form-control">
														<option value="">Life Happiness</option>
														<option value="Over the moon">Over the moon</option>
														<option value="Very Happy">Very Happy</option>
														<option value="UnHappy">UnHappy</option>
														<option value="Depressed">Depressed</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="financial" id="Select" class="form-control-sm form-control">
														<option value="Financial Awareness">Financial Awareness</option>
														<option value="Financially Confident">Financially Confident</option>
														<option value="Financially Aware">Financially Aware</option>
														<option value="Financially Chanllenged">Financially Chanllenged</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="retirement_goal" id="Select" class="form-control-sm form-control">
														<option value="">Retirement Goal</option>
														<option value="0-5">0-5</option>
														<option value="6-10">6-10</option>
														<option value="11-15">11-15</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="moneymeaning" id="Select" class="form-control-sm form-control">
														<option value="">Money Meaning</option>
														<option value="Freedom">Freedom</option>
														<option value="Control">Control</option>
														<option value="Security">Security</option>
														<option value="All the above">All the above</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<select name="desisionmaker" id="Select" class="form-control-sm form-control">
														<option value="0">Financial Desision Maker</option>
														<option value="Me">Me</option>
														<option value="Partner">Partner</option>
														<option value="Both">Both</option>
														<option value="Outside Source">Outside Source</option>
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
										<h4>Risk</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_15" value="Aggressive" type="checkbox">
														<label class="checkbox-custom-label" for="noti_15">Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_16" value="Moderately Aggressive" type="checkbox">
														<label class="checkbox-custom-label" for="noti_16">Moderately Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_17" value="Moderate" type="checkbox">
														<label class="checkbox-custom-label" for="noti_17">Moderate</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_18" value="Conservative" type="checkbox">
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
														<input name="when" class="checkbox-custom" id="noti_19" value="ASAP" type="checkbox">
														<label class="checkbox-custom-label" for="noti_19">ASAP</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_20" value="Week from Now" type="checkbox">
														<label class="checkbox-custom-label" for="noti_20">Week from Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_21" value="Month From Now" type="checkbox">
														<label class="checkbox-custom-label" for="noti_21">Month From Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_22" value="With six Months" type="checkbox">
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
													<select name="planning" id="Select" class="form-control-sm form-control">
														<option value="0">Select Option</option>
														<option value="Financial Planning">Financial Planning</option>
														<option value="Life Management">Life Management</option>
														<option value="Income Planning">Income Planning</option>
														<option value="Investments">Investments</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<p class="colorchange">How much do you have allocated for these services?</p>
											<div class="row">
												<div class="col-sm-12">
													<select name="services" id="Select" class="form-control-sm form-control">
														<option value="0">Select Option</option>
														<option value="2500-5000">2500-5000</option>
														<option value="5001-7000">5001-7000</option>
														<option value="7001-10000">7001-10000</option>
														<option value="10000">10000+</option>
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
										<h4>As, we've found three great advisor matches for you!</h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										
										<div class="advisorfmmsg"></div>
										<div class="f1-buttons">
											<button type="button" class="btn btn-previous">Decline</button>
											<button type="submit" id="submit" class="btn btn-submit">Accept</button>
										</div>
									</fieldset>
									<div class="f1-steps">
										<div class="f1-progress">
											<div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
										</div>
										<div class="f1-step active"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('#checkidmsg').hide();
$("#checkemail").change(function(){
$('#checkidmsg').text('').hide();
var em = $(this).val();
$.ajax({
url:'/checkemail',
type:'GET',
data: { 
   email:em
  },
success:function(re){
if(re.status==0){
$('#checkidmsg').text(re.msg).show();
}
}
})
});


$("#advisorfm").submit(function(e){
	e.preventDefault();
    var inputData = new FormData($(this)[0]);
    $.ajax({
            url:'<?php echo e(route("insert")); ?>',
            type:'POST',
            dataType: 'json',
            data:inputData,
            processData:false,
            contentType:false,
		 beforeSend: function () {
                  $('.backloader').show();
                   $('#submit').prop('disabled', true);
               },
               complete: function () {
                 $('.backloader').hide();
                  $('#submit').prop('disabled',false);
             },
            success: function (response) {
              if(response.status==1){
                $('.advisorfmmsg').css('background-color','green').text(response.msg).fadeIn('slow');
                 $('#submit').prop('disabled', true).hide();
              }else{
                $('.advisorfmmsg').css('background-color','red').text(response.msg).fadeIn('slow');
              }
              
            }  
                  });
});


</script>

<style>
.advisorfmmsg{background: #4caf50;
    padding: 12px 0px;
    color: #fff;
    display: none;}
.loader {
border: 6px solid #f3f3f3;
    border-radius: 50%;
    border-top: 6px solid #001640;
    border-bottom: 6px solid #001640;
    width: 50px;
    height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.backloader{
        background: #ffffffa3;
    position: absolute;
    width: 93%;
    z-index: 9;
    height: 100%;
    display:none;
    text-align: -webkit-center;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#checkidmsg{
	padding: 0px 11px;
    background: #ff0000a8;
    color: #fff;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/frontview/advisorquestion/advisorquestion.blade.php ENDPATH**/ ?>