<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">General Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo e(auth::user()['name']); ?>'s Profile</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

      <section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  	<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
								
						</div>
						<!-- /.box-header -->
						<form role="form" method="post" action="<?php echo e(route('update_profile')); ?>">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" class="form-control" name="uuid" value="<?php echo e(Auth::user()['uuid']); ?>">

                  <?php echo Form::hidden('user_id', $user->id); ?>

                  
							<div class="box-body">
								<div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Select Profile Pic</label>
                                 <label class="file">
                                    <input type="file" id="file">
                                 </label>
								      </div>
								   </div>
                         </div>  
                         <div class="row">
                           <div class="col-md-6">
                        
									<div class="form-group">
									  <label>First Name</label>
									  <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()['name']); ?>" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Last Name</label>
									  <input type="text" class="form-control" name="lastname" value="<?php echo e(Auth::user()['last_name']); ?>" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label >E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail" name="email" value="<?php echo e(Auth::user()['email']); ?>">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label >Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone" name="phone_no" value="<?php echo e($user['single']['phone_no']); ?>">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Address</label>
									  <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo e($user['single']['address']); ?>">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >City</label>
									  <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo e($user['single']['city']); ?>">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >State</label>
									  <input type="text" class="form-control" placeholder="State" name="state" value="<?php echo e($user['single']['state']); ?>">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Country</label>
									  <input type="text" class="form-control" placeholder="Country" name="country" value="<?php echo e($user['single']['country']); ?>">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Zip code</label>
									  <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" value="<?php echo e($user['single']['zipcode']); ?>">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information</h4>
								<hr class="my-15">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                              <label>Lincense Number</label>
                              <input type="text" class="form-control" name="lincensenumber" placeholder="Lincense Number" value="<?php echo e($question_data->lincensenumber); ?>">
                              </div>
                           </div>  
                           <div class="col-md-6">
                              <div class="form-group">
                              <label>Did someone ref you to us?</label>
                              <input type="text" class="form-control" name="ref" value="<?php echo e($question_data->ref); ?>" placeholder="Did someone ref you to us?">
                              </div>	   
                        </div>   
                        </div>

								<div class="row">
								   <div class="col-md-12">
                              <div class="form-group">
                                 <lable>How Did You Hear About Us?</lable>
                                 <select name="How_Did" id="SelectLm"  class="form-control-sm form-control">
                                                <option>How Did You Hear About Us?</option>
                                                <option value="1" <?php if($question_data->How_Did=='1'): ?>selected <?php endif; ?>>Option #1</option>
                                                <option value="2" <?php if($question_data->How_Did=='2'): ?>selected <?php endif; ?>>Option #2</option>
                                                <option value="3" <?php if($question_data->How_Did=='3'): ?>selected <?php endif; ?>>Option #3</option>
                                                <option value="4" <?php if($question_data->How_Did=='4'): ?>selected <?php endif; ?>>Option #4</option>
                                                <option value="5" <?php if($question_data->How_Did=='5'): ?>selected <?php endif; ?>>Option #5</option>
                                             </select>
                              </div>
									</div>
                        </div>
   
                        <div class="row">
                           <div class="col-md-12">
                                    <lable>What database program do you currently Uses</lable>
												<select name="What_database" id="select_data" value="<?php echo e($question_data->What_database); ?>" class="form-control-sm form-control">
                                       <option>What database program do you currently Uses</option>
                                       <option value="1"<?php if($question_data->What_database=='1'): ?>selected <?php endif; ?>>Option #1</option>
                                       <option value="2"<?php if($question_data->What_database=='2'): ?>selected <?php endif; ?>>Option #2</option>
                                       <option value="3"<?php if($question_data->What_database=='3'): ?>selected <?php endif; ?>>Option #3</option>
                                       <option value="4"<?php if($question_data->What_database=='4'): ?>selected <?php endif; ?>>Option #4</option>
                                       <option value="5"<?php if($question_data->What_database=='5'): ?>selected <?php endif; ?>>Option #5</option>
												</select>
											</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
            <div class="col-lg-6 col-12">
					  <div class="box">
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info">About</h4>
								<hr class="my-15">
								<div class="row">
                        <h4>What?</h4>
										<p class="colorchange">Are you looking for holistic approach to life and money management?</p>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="lookingforholastic" <?php if($question_data->lookingforholastic=='1'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_8" value="1"  type="radio">
														<label class="checkbox-custom-label" for="noti_8">Yes</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="lookingforholastic" <?php if($question_data->lookingforholastic=='0'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_9" value="0" type="radio">
														<label class="checkbox-custom-label" for="noti_9">No</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
									<div class="form-group">
                           <h4>Where?</h4>
										<p class="colorchange">What services are you most interested in receiving help with?</p>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="<?php echo e($question_data->mostinterested); ?>" class="checkbox-custom" id="noti_11" value="Estate Planning" type="checkbox">
														<label class="checkbox-custom-label" for="noti_11">Estate Planning</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="<?php echo e($question_data->mostinterested); ?>"  class="checkbox-custom" id="noti_12" value="Life And Money Management" type="checkbox">
														<label class="checkbox-custom-label" for="noti_12">Life And Money Management</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="<?php echo e($question_data->mostinterested); ?>" class="checkbox-custom" id="noti_13" value="Cash Flow / Budgeting" type="checkbox">
														<label class="checkbox-custom-label" for="noti_13">Cash Flow / Budgeting</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="<?php echo e($question_data->mostinterested); ?>" class="checkbox-custom" id="noti_14" value="All Of The Above" type="checkbox">
														<label class="checkbox-custom-label" for="noti_14">All Of The Above</label>
													</div>
												</div>
											</div>
										</div>
																	</div>
								<div class="row">
								<p class="colorchange">Where are you now? Status?</p>
										<div class="form-group">
											<div class="row">
                                 <div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Single" <?php if($question_data->status=='Single'): ?>checked <?php endif; ?> id="radio1" type="radio">
														<label for="radio1">Single</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Married" <?php if($question_data->status=='Married'): ?>checked <?php endif; ?> id="radio2" type="radio">
														<label for="radio2">Married</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Widow" <?php if($question_data->status=='Widow'): ?>checked <?php endif; ?> id="radio3" type="radio">
														<label for="radio3">Widow</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Divorce" <?php if($question_data->status=='Divorce'): ?>checked <?php endif; ?> id="radio4" type="radio">
														<label for="radio4">Divorce</label>
													</div>
												</div>
											</div>
										</div>
								   </div>
                        </div>   
								<h4>ASSETS</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="assets" id="assets" class="form-control-sm form-control">
														<option value="">Assets</option>
														<option value="0-99,999" <?php if($question_data->assets=='0-99,999'): ?>selected <?php endif; ?>>0-99,999</option>
														<option value="100,000-250,000" <?php if($question_data->assets=='100,000-250,000'): ?>selected <?php endif; ?>>100,000-250,000</option>
														<option value="250,001-500,000" <?php if($question_data->assets=='250,001-500,000'): ?>selected <?php endif; ?>>250,001-500,000</option>
														<option value="500,001-1,000,000" <?php if($question_data->assets=='500,001-1,000,000'): ?>selected <?php endif; ?>>500,001-1,000,000</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="age" id="age" class="form-control-sm form-control">
														<option value="">Age</option>
														<option value="21-35"<?php if($question_data->age=='21-35'): ?>selected <?php endif; ?>>21-35</option>
														<option value="36-45"<?php if($question_data->age=='36-45'): ?>selected <?php endif; ?>>36-45</option>
														<option value="46-55"<?php if($question_data->age=='46-55'): ?>selected <?php endif; ?>>46-55</option>
														<option value="56-75"<?php if($question_data->age=='56-75'): ?>selected <?php endif; ?>>56-75</option>
														<option value="75"<?php if($question_data->age=='75'): ?>selected <?php endif; ?>>75+</opton>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="life_happiness" id="Select" class="form-control-sm form-control">
														<option value="">Life Happiness</option>
														<option value="Over the moon"<?php if($question_data->life_happiness=='Over the moon'): ?>selected <?php endif; ?>>Over the moon</option>
														<option value="Very Happy"<?php if($question_data->life_happiness=='Very Happy'): ?>selected <?php endif; ?>>Very Happy</option>
														<option value="UnHappy"<?php if($question_data->life_happiness=='UnHappy'): ?>selected <?php endif; ?>>UnHappy</option>
														<option value="Depressed"<?php if($question_data->life_happiness=='Depressed'): ?>selected <?php endif; ?>>Depressed</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="financial" id="Select" class="form-control-sm form-control">
														<option value="Financial Awareness" <?php if($question_data->financial=='Financial Awareness'): ?>selected <?php endif; ?>>Financial Awareness</option>
														<option value="Financially Confident" <?php if($question_data->financial=='Financially Confident'): ?>selected <?php endif; ?>>Financially Confident</option>
														<option value="Financially Aware" <?php if($question_data->financial=='Financially Aware'): ?>selected <?php endif; ?>>Financially Aware</option>
														<option value="Financially Chanllenged" <?php if($question_data->financial=='Financially Chanllenged'): ?>selected <?php endif; ?>>Financially Chanllenged</option>
													</select>
												</div>
											</div>
                                 <div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="retirement_goal" id="Select" class="form-control-sm form-control">
														<option value="">Retirement Goal</option>
														<option value="0-5"<?php if($question_data->retirement_goal=='0-5'): ?>selected <?php endif; ?>>0-5</option>
														<option value="6-10"<?php if($question_data->retirement_goal=='6-10'): ?>selected <?php endif; ?>>6-10</option>
														<option value="11-15"<?php if($question_data->retirement_goal=='11-15'): ?>selected <?php endif; ?>>11-15</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="moneymeaning" id="Select" class="form-control-sm form-control">
														<option value="">Money Meaning</option>
														<option value="Freedom" <?php if($question_data->moneymeaning=='Freedom'): ?>selected <?php endif; ?>>Freedom</option>
														<option value="Control" <?php if($question_data->moneymeaning=='Control'): ?>selected <?php endif; ?>>Control</option>
														<option value="Security" <?php if($question_data->moneymeaning=='Security'): ?>selected <?php endif; ?>>Security</option>
														<option value="All the above" <?php if($question_data->moneymeaning=='All the above'): ?>selected <?php endif; ?>>All the above</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<select name="desisionmaker" id="Select" class="form-control-sm form-control">
														<option value="0">Financial Desision Maker</option>
														<option value="Me"<?php if($question_data->desisionmaker=='Me'): ?>selected <?php endif; ?> >Me</option>
														<option value="Partner" <?php if($question_data->desisionmaker=='Partner'): ?>selected <?php endif; ?>>Partner</option>
														<option value="Both" <?php if($question_data->desisionmaker=='Both'): ?>selected <?php endif; ?>>Both</option>
														<option value="Outside Source" <?php if($question_data->desisionmaker=='Outside Source'): ?>selected <?php endif; ?>>Outside Source</option>
													</select>
												</div>
											</div>

                                 <h4>Risk</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_15" value="Aggressive" <?php if($question_data->risk=='Aggressive'): ?>checked <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_15">Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_16" value="Moderately Aggressive" <?php if($question_data->risk=='Moderately'): ?>selected <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_16">Moderately Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk"<?php if($question_data->risk=='Moderate'): ?>selected <?php endif; ?> class="checkbox-custom" id="noti_17" value="Moderate" type="checkbox">
														<label class="checkbox-custom-label" for="noti_17">Moderate</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_18" value="Conservative"<?php if($question_data->risk=='Conservative Source'): ?>selected <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_18">Conservative</label>
													</div>
												</div>
											</div>
										</div>
										
                              <h4>When</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" <?php if($question_data->when=='ASAP'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_19" value="ASAP" type="checkbox">
														<label class="checkbox-custom-label" for="noti_19">ASAP</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_20" value="Week from Now" <?php if($question_data->when=='Week from Now'): ?>checked <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_20">Week from Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_21" value="Month From Now" <?php if($question_data->when=='Month From Now'): ?>checked <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_21">Month From Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_22" value="With six Months" <?php if($question_data->when=='With six Months'): ?>checked <?php endif; ?> type="checkbox">
														<label class="checkbox-custom-label" for="noti_22">With six Months</label>
													</div>
												</div>
											</div>
										</div>
									
                              <h4>Why?</h4>
										<div class="form-group">
											<p class="colorchange">What type of planning do you want to get started ?</p>
											<div class="row">
												<div class="col-sm-12">
													<select name="planning" id="Select" class="form-control-sm form-control">
														<option value="0">Select Option</option>
														<option value="Financial Planning" <?php if($question_data->planning=='Financial Planning'): ?>selected <?php endif; ?>>Financial Planning</option>
														<option value="Life Management"<?php if($question_data->planning=='Life Management'): ?>selected <?php endif; ?>>Life Management</option>
														<option value="Income Planning"<?php if($question_data->planning=='Income Planning'): ?>selected <?php endif; ?>>Income Planning</option>
														<option value="Investments"<?php if($question_data->planning=='Investments'): ?>selected <?php endif; ?>>Investments</option>
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
														<option value="2500-5000" <?php if($question_data->services=='2500-5000'): ?>selected <?php endif; ?>>2500-5000</option>
														<option value="5001-7000" <?php if($question_data->services=='5001-7000'): ?>selected <?php endif; ?>>5001-7000</option>
														<option value="7001-10000" <?php if($question_data->services=='7001-10000'): ?>selected <?php endif; ?>>7001-10000</option>
														<option value="10000" <?php if($question_data->services=='10000'): ?>selected <?php endif; ?>>10000+</option>
													</select>
												</div>
											</div>
										</div>
										
							<!-- /.box-body -->
							<div class="box-footer text-right">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
 
         </div>   
            </section>
		<!-- /.content -->
	  </div>
  </div>
            
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/advisor_profile/profile.blade.php ENDPATH**/ ?>