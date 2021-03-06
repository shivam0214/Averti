<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page"><h3 class="page-title"><?php echo e(auth::user()['name']); ?>'s Profile</h3></li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	<section class="content">
		<div class="row">
			<div class="col-md-4 col-lg-4 ">
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url(<?php echo e(asset('assets/images/achievement/bg.jpg')); ?>) center center;">
					  <h3 class="widget-user-username"><?php echo e(Auth::user()['name']); ?></h3>
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="<?php echo e($user['single']['profile_image']); ?>" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">12K</h5>
							<span class="description-text">FOLLOWERS</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">550</h5>
							<span class="description-text">FOLLOWERS</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">158</h5>
							<span class="description-text">TWEETS</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
				  <div class="box">
					<div class="box-body box-profile">            
					  <div class="row">
						<div class="col-12">
							<div>
								<p>Email :<span class="text-gray pl-10"><?php echo e(Auth::user()['email']); ?></span> </p>
								<p>Phone :<span class="text-gray pl-10">+<?php echo e($user['single']['phone_no']); ?></span></p>
								<p>Address :<span class="text-gray pl-10"><?php echo e($user['single']['address']); ?></span></p>
							</div>
						</div>
						<div class="col-12">
							<div class="pb-15">						
								<p class="mb-10">Social Profile</p>
								<div class="user-social-acount">
									<button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
									<button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
									<button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div>
								<div class="map-box">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>
				<div class="box">
					<div class="box-body">
						<div class="flexbox align-items-baseline mb-20">
						  <h6 class="text-uppercase ls-2">Users</h6>
						  <small>20</small>
						</div>
						<div class="gap-items-2 gap-y">
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/1.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/3.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/4.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/5.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/6.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/7.jpg')); ?>" alt="..."></a>
						  <a class="avatar" href="#"><img src="<?php echo e(asset('assets/img/avatars/8.jpg')); ?>" alt="..."></a>
						  <a class="avatar avatar-more" href="#">+15</a>
						</div>
					</div>
					<div class="box-footer">
						<a class="text-uppercase d-blockls-1 text-fade" href="#">Invite People</a>
					</div>
				</div>
				<div class="box box-inverse" style="background-color: #3b5998">
				  <div class="box-header no-border">
					<span class="fa fa-facebook font-size-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title box-title-bold">Facebook feed</h5>
					  </div>
				  </div>

				  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
					<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					<div class="flexbox">
					  <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
					  <span><i class="fa fa-heart"></i> 75</span>
					</div>
				  </blockquote>
				</div>
			</div>
			<div class="col-12 col-lg-7 col-xl-8">
				<div class="nav-tabs-custom">
				  	<ul class="nav nav-tabs">
						<li><a class="active" href="#settings" data-toggle="tab"><h5>Informatio</h5></a></li>
						<li><a href="#info" data-toggle="tab"><h5>Question</h5></a></li>
						<li><a  href="#activity" data-toggle="tab"><h5>Activity</h5></a></li>
						<li><a href="#usertimeline" data-toggle="tab"><h5>Timeline</h5></a></li>

				</ul>
					<div class="tab-content">
						<div class="active  tab-pane" id="settings">
										
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
						<div class="input-group">
							<span class="input-group-btn">
								<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
									<i class="fa fa-picture-o"></i> Choose
								</a>
							</span>
							<input id="thumbnail" class="form-control" type="text" name="profile_image" value="<?php echo e($user['single']['profile_image']); ?>" name="filepath">
						</div>
						<div class="col-md-6">
							<div id="holder" style="margin-top:15px;max-height:100px;"></div>
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
						
						</div>		
						<div class="tab-pane" id="info">
						<div class="box">
							<!-- /.box-header -->
							<form role="form" method="post" action="<?php echo e(route('update_data')); ?>">
								<?php echo csrf_field(); ?>
								<?php echo Form::hidden('user_id', $user->id); ?>

													<div class="box-body">
													<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information</h4>
											<hr class="my-15">
										<div class="row">
									<div class="col-md-6">
								<div class="form-group">
								<label>Lincense Number</label>
								<input type="text" class="form-control" name="lincensenumber" placeholder="Lincense Number" value="<?php echo e(@$question_data->lincensenumber); ?>">
								</div>
							</div>  
									<div class="col-md-6">
										<div class="form-group">
										<label>Did someone ref you to us?</label>
										<input type="text" class="form-control" name="ref" value="<?php echo e(@$question_data->ref); ?>" placeholder="Did someone ref you to us?">
										</div>	   
										</div>   
									</div>

									<div class="row">
									<div class="col-md-12">
								<div class="form-group">
									<lable>How Did You Hear About Us?</lable>
									<select name="How_Did" id="SelectLm"  class="form-control-sm form-control">
													<option>How Did You Hear About Us?</option>
													<option value="1" <?php if(@$question_data->How_Did=='1'): ?>selected <?php endif; ?>>Less than 1</option>
													<option value="2" <?php if(@$question_data->How_Did=='2'): ?>selected <?php endif; ?>>1-5</option>
													<option value="3" <?php if(@$question_data->How_Did=='3'): ?>selected <?php endif; ?>>6-10</option>
													<option value="4" <?php if(@$question_data->How_Did=='4'): ?>selected <?php endif; ?>>10-15</option>
													<option value="5" <?php if(@$question_data->How_Did=='5'): ?>selected <?php endif; ?>>15+</option>
												</select>
								</div>
										</div>
							</div>
	
							<div class="row">
							<div class="col-md-12">
										<lable>How did you hear about Site</lable>
													<select name="What_database" id="select_data" value="<?php echo e(@$question_data->What_database); ?>" class="form-control-sm form-control">
										<option>How did you hear about Site</option>
										<option value="1"<?php if(@$question_data->What_database=='1'): ?>selected <?php endif; ?>>News Artical</option>
										<option value="2"<?php if(@$question_data->What_database=='2'): ?>selected <?php endif; ?>>Google</option>
										<option value="3"<?php if(@$question_data->What_database=='3'): ?>selected <?php endif; ?>>Averti team contact you</option>
										<option value="4"<?php if(@$question_data->What_database=='4'): ?>selected <?php endif; ?>>Advisor Referral</option>
																		<option value="5"<?php if(@$question_data->What_database=='5'): ?>selected <?php endif; ?>>Other</option>
													</select>
												</div>
									</div>
									<div></div>
							<h4>What?</h4>
											<p class="colorchange">Are you looking for holistic approach to life and money management?</p>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="lookingforholastic" <?php if(@$question_data->lookingforholastic=='1'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_8" value="1"  type="radio">
															<label class="checkbox-custom-label" for="noti_8">Yes</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="lookingforholastic" <?php if(@$question_data->lookingforholastic=='0'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_9" value="0" type="radio">
															<label class="checkbox-custom-label" for="noti_9">No</label>
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
															<input name="mostinterested" value="Estate Planning" class="checkbox-custom" id="noti_11" value="Estate Planning" type="checkbox" <?php if('Estate Planning'==@$question_data->mostinterested): ?> checked <?php endif; ?>>
															<label class="checkbox-custom-label" for="noti_11">Estate Planning</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="mostinterested" value="Life And Money Management"  class="checkbox-custom" id="noti_12" value="Life And Money Management" type="checkbox" <?php if('Life And Money Management'==@$question_data->mostinterested): ?> checked <?php endif; ?>>
															<label class="checkbox-custom-label" for="noti_12">Life And Money Management</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="mostinterested" value="Cash Flow / Budgeting" class="checkbox-custom" id="noti_13" value="Cash Flow / Budgeting" type="checkbox" <?php if('Cash Flow / Budgeting'==@$question_data->mostinterested): ?> checked <?php endif; ?>>
															<label class="checkbox-custom-label" for="noti_13">Cash Flow / Budgeting</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="mostinterested" value="All Of The Above" class="checkbox-custom" id="noti_14" value="All Of The Above" type="checkbox" <?php if('All Of The Above'==@$question_data->mostinterested): ?> checked <?php endif; ?>>
															<label class="checkbox-custom-label" for="noti_14">All Of The Above</label>
														</div>
													</div>
												</div>
											</div>
																		</div>
									<p class="colorchange">Where are you now? Status?</p>
											<div class="form-group">
												<div class="row">
									<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="rdio rdio-primary radio-inline">
															<input name="status" value="Single" <?php if(@$question_data->status=='Single'): ?>checked <?php endif; ?> id="radio1" type="radio">
															<label for="radio1">Single</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="rdio rdio-primary radio-inline">
															<input name="status" value="Married" <?php if(@$question_data->status=='Married'): ?>checked <?php endif; ?> id="radio2" type="radio">
															<label for="radio2">Married</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="rdio rdio-primary radio-inline">
															<input name="status" value="Widow" <?php if(@$question_data->status=='Widow'): ?>checked <?php endif; ?> id="radio3" type="radio">
															<label for="radio3">Widow</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="rdio rdio-primary radio-inline">
															<input name="status" value="Divorce" <?php if(@$question_data->status=='Divorce'): ?>checked <?php endif; ?> id="radio4" type="radio">
															<label for="radio4">Divorce</label>
														</div>
													</div>
												</div>
											</div>
										</div>   
									<h4>ASSETS</h4>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<lable></lable>
														<select name="assets" id="assets" class="form-control-sm form-control">
															<option value="">Assets</option>
															<option value="0-99,999" <?php if(@$question_data->assets=='0-99,999'): ?>selected <?php endif; ?>>0-99,999</option>
															<option value="100,000-250,000" <?php if(@$question_data->assets=='100,000-250,000'): ?>selected <?php endif; ?>>100,000-250,000</option>
															<option value="250,001-500,000" <?php if(@$question_data->assets=='250,001-500,000'): ?>selected <?php endif; ?>>250,001-500,000</option>
															<option value="500,001-1,000,000" <?php if(@$question_data->assets=='500,001-1,000,000'): ?>selected <?php endif; ?>>500,001-1,000,000</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<lable></lable>
														<select name="age" id="age" class="form-control-sm form-control">
															<option value="">Age</option>
															<option value="21-35"<?php if(@$question_data->age=='21-35'): ?>selected <?php endif; ?>>21-35</option>
															<option value="36-45"<?php if(@$question_data->age=='36-45'): ?>selected <?php endif; ?>>36-45</option>
															<option value="46-55"<?php if(@$question_data->age=='46-55'): ?>selected <?php endif; ?>>46-55</option>
															<option value="56-75"<?php if(@$question_data->age=='56-75'): ?>selected <?php endif; ?>>56-75</option>
															<option value="75"<?php if(@$question_data->age=='75'): ?>selected <?php endif; ?>>75+</opton>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<lable></lable>
														<select name="life_happiness" id="Select" class="form-control-sm form-control">
															<option value="">Life Happiness</option>
															<option value="Over the moon"<?php if(@$question_data->life_happiness=='Over the moon'): ?>selected <?php endif; ?>>Over the moon</option>
															<option value="Very Happy"<?php if(@$question_data->life_happiness=='Very Happy'): ?>selected <?php endif; ?>>Very Happy</option>
															<option value="UnHappy"<?php if(@$question_data->life_happiness=='UnHappy'): ?>selected <?php endif; ?>>UnHappy</option>
															<option value="Depressed"<?php if(@$question_data->life_happiness=='Depressed'): ?>selected <?php endif; ?>>Depressed</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<lable></lable>
														<select name="financial" id="Select" class="form-control-sm form-control">
															<option value="Financial Awareness" <?php if(@$question_data->financial=='Financial Awareness'): ?>selected <?php endif; ?>>Financial Awareness</option>
															<option value="Financially Confident" <?php if(@$question_data->financial=='Financially Confident'): ?>selected <?php endif; ?>>Financially Confident</option>
															<option value="Financially Aware" <?php if(@$question_data->financial=='Financially Aware'): ?>selected <?php endif; ?>>Financially Aware</option>
															<option value="Financially Chanllenged" <?php if(@$question_data->financial=='Financially Chanllenged'): ?>selected <?php endif; ?>>Financially Chanllenged</option>
														</select>
													</div>
												</div>
									<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<select name="retirement_goal" id="Select" class="form-control-sm form-control">
															<option value="">Retirement Goal</option>
															<option value="0-5"<?php if(@$question_data->retirement_goal=='0-5'): ?>selected <?php endif; ?>>0-5</option>
															<option value="6-10"<?php if(@$question_data->retirement_goal=='6-10'): ?>selected <?php endif; ?>>6-10</option>
															<option value="11-15"<?php if(@$question_data->retirement_goal=='11-15'): ?>selected <?php endif; ?>>11-15</option>
														</select>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<select name="moneymeaning" id="Select" class="form-control-sm form-control">
															<option value="">Money Meaning</option>
															<option value="Freedom" <?php if(@$question_data->moneymeaning=='Freedom'): ?>selected <?php endif; ?>>Freedom</option>
															<option value="Control" <?php if(@$question_data->moneymeaning=='Control'): ?>selected <?php endif; ?>>Control</option>
															<option value="Security" <?php if(@$question_data->moneymeaning=='Security'): ?>selected <?php endif; ?>>Security</option>
															<option value="All the above" <?php if(@$question_data->moneymeaning=='All the above'): ?>selected <?php endif; ?>>All the above</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<select name="desisionmaker" id="Select" class="form-control-sm form-control">
															<option value="0">Financial Desision Maker</option>
															<option value="Me"<?php if(@$question_data->desisionmaker=='Me'): ?>selected <?php endif; ?> >Me</option>
															<option value="Partner" <?php if(@$question_data->desisionmaker=='Partner'): ?>selected <?php endif; ?>>Partner</option>
															<option value="Both" <?php if(@$question_data->desisionmaker=='Both'): ?>selected <?php endif; ?>>Both</option>
															<option value="Outside Source" <?php if(@$question_data->desisionmaker=='Outside Source'): ?>selected <?php endif; ?>>Outside Source</option>
														</select>
													</div>
												</div>

									<h4>Risk</h4>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="risk" class="checkbox-custom" id="noti_15" value="Aggressive" <?php if(@$question_data->risk=='Aggressive'): ?>checked <?php endif; ?> type="checkbox">
															<label class="checkbox-custom-label" for="noti_15">Aggressive</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="risk" class="checkbox-custom" id="noti_16" value="Moderately Aggressive" <?php if(@$question_data->risk=='Moderately'): ?>selected <?php endif; ?> type="checkbox">
															<label class="checkbox-custom-label" for="noti_16">Moderately Aggressive</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="risk"<?php if(@$question_data->risk=='Moderate'): ?>selected <?php endif; ?> class="checkbox-custom" id="noti_17" value="Moderate" type="checkbox">
															<label class="checkbox-custom-label" for="noti_17">Moderate</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="risk" class="checkbox-custom" id="noti_18" value="Conservative"<?php if(@$question_data->risk=='Conservative Source'): ?>selected <?php endif; ?> type="checkbox">
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
															<input name="when" <?php if(@$question_data->when=='ASAP'): ?>checked <?php endif; ?> class="checkbox-custom" id="noti_19" value="ASAP" type="checkbox">
															<label class="checkbox-custom-label" for="noti_19">ASAP</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="when" class="checkbox-custom" id="noti_20" value="Week from Now" <?php if(@$question_data->when=='Week from Now'): ?>checked <?php endif; ?> type="checkbox">
															<label class="checkbox-custom-label" for="noti_20">Week from Now</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="when" class="checkbox-custom" id="noti_21" value="Month From Now" <?php if(@$question_data->when=='Month From Now'): ?>checked <?php endif; ?> type="checkbox">
															<label class="checkbox-custom-label" for="noti_21">Month From Now</label>
														</div>
													</div>
													<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
														<div class="custom-checkbox">
															<input name="when" class="checkbox-custom" id="noti_22" value="With six Months" <?php if(@$question_data->when=='With six Months'): ?>checked <?php endif; ?> type="checkbox">
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
															<option value="Financial Planning" <?php if(@$question_data->planning=='Financial Planning'): ?>selected <?php endif; ?>>Financial Planning</option>
															<option value="Life Management" <?php if(@$question_data->planning=='Life Management'): ?>selected <?php endif; ?>>Life Management</option>
															<option value="Income Planning" <?php if(@$question_data->planning=='Income Planning'): ?>selected <?php endif; ?>>Income Planning</option>
															<option value="Investments" <?php if(@$question_data->planning=='Investments'): ?>selected <?php endif; ?>>Investments</option>
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
															<option value="2500-5000" <?php if(@$question_data->services=='2500-5000'): ?>selected <?php endif; ?>>2500-5000</option>
															<option value="5001-7000" <?php if(@$question_data->services=='5001-7000'): ?>selected <?php endif; ?>>5001-7000</option>
															<option value="7001-10000" <?php if(@$question_data->services=='7001-10000'): ?>selected <?php endif; ?>>7001-10000</option>
															<option value="10000" <?php if(@$question_data->services=='10000'): ?>selected <?php endif; ?>>10000+</option>
														</select>
													</div>
												</div>
											</div></div></div>
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
							
						</div>
  						<div class="tab-pane" id="usertimeline">
						  <div class="box">
							<div class="media bb-1 border-fade">
							<img class="avatar avatar-lg" src="<?php echo e(asset('assets/img/avatars/3.jpg')); ?>" alt="...">
							<div class="media-body">
								<p>
								<strong>Denial Webar</strong>
								<time class="float-right text-fade" datetime="2017">24 min ago</time>
								</p>
								<p><small>Designer</small></p>
							</div>
							</div>
	
							<div class="box-body bb-1 border-fade">
							<p class="lead">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>
	
							<div class="gap-items-4 mt-10">
								<a class="text-fade hover-light" href="#">
								<i class="fa fa-thumbs-up mr-1"></i> 1254
								</a>
								<a class="text-fade hover-light" href="#">
								<i class="fa fa-comment mr-1"></i> 25
								</a>
								<a class="text-fade hover-light" href="#">
								<i class="fa fa-share-alt mr-1"></i> 12
								</a>
							</div>
							</div>
	
	
							<div class="media-list media-list-divided bg-lighter">
							<div class="media">
								<a class="avatar" href="#">
								<img src="<?php echo e(asset('assets/img/avatars/6.jpg')); ?>" alt="...">
								</a>
								<div class="media-body">
								<p>
									<a href="#"><strong>Rock Tele</strong></a>
									<time class="float-right text-fade" datetime="2017-07-14 20:00">Just now</time>
								</p>
								<p>Uniquely enhance world-class channels with just in time schemas.</p>
	
								<div class="media px-0 mt-20">
									<a class="avatar" href="#">
									<img src="<?php echo e(asset('assets/img/avatars/8.jpg')); ?>" alt="...">
									</a>
									<div class="media-body">
									<p>
										<a href="#"><strong>Brock Lensar</strong></a>
										<time class="float-right text-fade" datetime="2017-07-14 20:00">26 mins ago</time>
									</p>
									<p>Thank you for your nice comment.</p>
									</div>
								</div>
	
								</div>
							</div>
	
							<div class="media">
								<a class="avatar" href="#">
								<img src="<?php echo e(asset('assets/img/avatars/2.jpg')); ?>" alt="...">
								</a>
								<div class="media-body">
								<p>
									<a href="#"><strong>Tony Stark</strong></a>
									<time class="float-right text-fade" datetime="2017-07-14 20:00">2 hours ago</time>
								</p>
								<p>Continually drive user friendly solutions through performance based infomediaries.</p>
								</div>
							</div>
							</div>
	
							<form class="publisher bt-1 border-fade">
							<img class="avatar avatar-sm" src="<?php echo e(asset('assets/img/avatars/4.jpg')); ?>" alt="...">
							<input class="publisher-input" type="text" placeholder="Add Your Comment">
							<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
							<span class="publisher-btn file-group">
								<i class="fa fa-camera file-browser"></i>
								<input type="file">
							</span>
							</form>
	
						</div>
	
	
						<div class="box p-15"> 
							<div class="timeline timeline-single-column timeline-single-full-column">
								
								<span class="timeline-label">
									<span class="badge badge-info badge-pill">Images</span>
								</span>
	
								<div class="timeline-item">
									<div class="timeline-point timeline-point-success">
										<i class="fa fa-image"></i>
									</div>
									<div class="timeline-event">
										<div class="timeline-heading">
											<h4 class="timeline-title"><a href="#">Rakesh Kumar</a><small> uploaded new photos</small></h4>
										</div>
										<div class="timeline-body">
											<img src="<?php echo e(asset('assets/images/coming-soon/01.png')); ?>" alt="..." class="m-10">
										</div>
										<div class="timeline-footer">
											<p class="text-right"><i class="fa fa-clock-o"></i> 8 days ago</p>
										</div>
									</div>
								</div>
	
								<div class="timeline-item">
									<div class="timeline-point timeline-point-info">
										<i class="ion ion-chatbubble-working"></i>
									</div>
									<div class="timeline-event">
										<div class="timeline-heading">
											<h4 class="timeline-title"><a href="#">Jone Doe</a><small> commented on your post</small></h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>									
										</div>
										<div class="timeline-footer">
											<a class="btn btn-success btn-sm" href="#">View comment</a>
											<p class="pull-right"><i class="fa fa-clock-o"></i> 8 days ago</p>
										</div>
									</div>
								</div>
	
								<div class="timeline-item">
									<div class="timeline-point timeline-point-danger">
										<i class="ion ion-ios-videocam"></i>
									</div>
									<div class="timeline-event">
										<div class="timeline-heading">
											<h4 class="timeline-title"><a href="#">Jone Doe</a><small> shared a video</small></h4>
										</div>
										<div class="timeline-body">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe width="854" height="480" src="https://www.youtube.com/embed/k85mRPqvMbE" frameborder="0" allowfullscreen></iframe>
											</div>									
										</div>
										<div class="timeline-footer">
											<a class="btn btn-success btn-sm" href="#">View comment</a>
											<p class="pull-right"><i class="fa fa-clock-o"></i> 8 days ago</p>
										</div>
									</div>
								</div>
	
								<span class="timeline-label">
									<button class="btn btn-danger"><i class="fa fa-clock-o"></i></button>
								</span>
							</div>
						</div>
						</div>
						<div class="tab-pane" id="activity">	
						<div class="box p-15">
						<div class="publisher publisher-multi bg-white b-1 mb-30">
							<textarea class="publisher-input auto-expand" rows="4" placeholder="Write something"></textarea>
							<div class="flexbox">
								<div class="gap-items">
										<span class="publisher-btn file-group">
										<i class="fa fa-image file-browser"></i>
										<input type="file">
										</span>
										<a class="publisher-btn" href="#"><i class="fa fa-map-marker"></i></a>
										<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
								</div>
								<button class="btn btn-sm btn-bold btn-primary">Post</button>
							</div>
						</div> 				
					  <!-- Post -->
					  <div class="post">

						<div class="user-block">
						  <img class="img-bordered-sm rounded-circle" src="<?php echo e(asset('assets/img/avatars/2.jpg')); ?>" alt="user image">
							  <span class="username">
								<a href="#">Brayden</a>
								<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
							    </span>
						        <span class="description">5 minutes ago</span>
						</div>
						<!-- /.user-block -->
					<div class="activitytimeline">
							<p>
							  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
							</p>
							<ul class="list-inline">
							  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
							  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
							  </li>
							  <li class="pull-right">
								<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
								  (5)</a></li>
							</ul>
							<form class="form-element">
								<input class="form-control input-sm" type="text" placeholder="Type a comment">
						   </form>
					</div>
					</div>
					  <!-- /.post -->
  
					  <!-- Post -->
					  <div class="post">
						<div class="user-block">
						  <img class="img-bordered-sm rounded-circle" src="<?php echo e(asset('assets/img/avatars/7.jpg')); ?>" alt="user image">
							  <span class="username">
								<a href="#">Evan</a>
								<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
							  </span>
						  <span class="description">5 minutes ago</span>
						</div>
						<!-- /.user-block -->
						<div class="activitytimeline">
							<div class="row mb-20">
							  <div class="col-sm-6">
								<img class="img-fluid" src="<?php echo e(asset('assets/images/auth-bg/bg-2.jpg')); ?>" alt="Photo">
							  </div>
							  <!-- /.col -->
							  <div class="col-sm-6">
								<div class="row">
								  <div class="col-sm-6">
									<img class="img-fluid" src="<?php echo e(asset('assets/images/auth-bg/bg-4.jpg')); ?>" alt="Photo">
									<br><br>
									<img class="img-fluid" src="<?php echo e(asset('assets/images/auth-bg/bg-1.jpg')); ?>" alt="Photo">
								  </div>
								  <!-- /.col -->
								  <div class="col-sm-6">
									<img class="img-fluid" src="<?php echo e(asset('assets/images/auth-bg/bg-5.jpg')); ?>" alt="Photo">
									<br><br>
									<img class="img-fluid" src="<?php echo e(asset('assets/images/auth-bg/bg-2.jpg')); ?>" alt="Photo">
								  </div>
								  <!-- /.col -->
								</div>
								<!-- /.row -->
							  </div>
							  <!-- /.col -->
							</div>
							<!-- /.row -->
  
							<ul class="list-inline">
							  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
							  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
							  </li>
							  <li class="pull-right">
								<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
								  (5)</a></li>
							</ul>
  
							<form class="form-element">
								<input class="form-control input-sm" type="text" placeholder="Type a comment">
						   </form>
						  </div>
					  </div>
					  <!-- /.post -->
  
					  <!-- Post -->
					  <div class="post clearfix">
						<div class="user-block">
						  <img class="img-bordered-sm rounded-circle" src="<?php echo e(asset('assets/img/avatars/4.jpg')); ?>" alt="user image">
							  <span class="username">
								<a href="#">Nicholas</a>
								<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
							  </span>
						  <span class="description">5 minutes ago</span>
						</div>
						<!-- /.user-block -->
						  <div class="activitytimeline">
							<p>
							  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
							</p>
  
							<form class="form-horizontal form-element">
							  <div class="form-group row no-gutters">
								<div class="col-sm-9">
								  <input class="form-control input-sm" placeholder="Response">
								</div>
								<div class="col-sm-3">
								  <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
								</div>
							  </div>
							</form>
						  </div>
					  </div>
					  <!-- /.post -->
					 </div>
  		
						</div>										
					</div>
				</div>	
			</div>		
		</div>
	</section>			
	</div>
</div>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/advisor_profile/profile.blade.php ENDPATH**/ ?>