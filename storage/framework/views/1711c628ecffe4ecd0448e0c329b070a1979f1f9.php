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
					  <img class="rounded-circle" src="<?php echo (($user['single']['profile_image'])!= NULL) ? url($user['single']['profile_image']) : url(asset('assets/img/avatars/Un.png')); ?>" alt="User Avatar">
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
						<li><a class="active" href="#settings" data-toggle="tab"><h5> Edit Informatio</h5></a></li>
						<li><a href="#info" data-toggle="tab"><h5>Edit  Question</h5></a></li>
						<li><a  href="#activity" data-toggle="tab"><h5>Activity</h5></a></li>
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
                            <form role="form" method="post" action="<?php echo e(route('update_data')); ?>">
							<?php echo csrf_field(); ?>
							<?php echo Form::hidden('user_id', $user->id); ?>

								<div class="box-body">
									<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information</h4>
										<hr class="my-15">
										    <div class="row">
									            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label>Occupation</label>
                                                    <input type="text" class="form-control" name="ref" value="<?php echo e(@$question_data->occupation); ?>" placeholder="Did someone ref you to us?">
                                                    </div>	   
                                                </div>
                                            </div>       
                                     <div class="row">
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
								    	<h4>Age</h4>
                                        <div class="form-group">

                                            <div class="row">

                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
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
                            <div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/user_Profile.blade.php ENDPATH**/ ?>