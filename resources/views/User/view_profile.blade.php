@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	<div class="container-full">
		<section class="content">	
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="box">
						<div class="media-list media-list-divided media-list-hover">
							<div class="media align-items-center">
									<a class="avatar avatar-lg status-success" href="#">
										<img src="<?php echo (($data['single']['profile_image'])!= NULL) ? url($data['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;">
										
									</a>
								<div class="media-body">
									<p>
									<input type="hidden" value="{{$data->id}}" name="id">

									<a href="#"><strong><h4>{{$data->name}}</h4></strong></a>
									</p>
									<p>{{@$question_data->occupation}}</p>
									<nav class="nav mt-2">
									<a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-github"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
									</nav>
								</div>
								<div class="media-right">
									<p><i class="fa fa-phone" aria-hidden="true"></i>
									<span>+{{$data['single']['phone_no']}}</span> </p>
									<p><i class="ti-email"></i> 
									<span>{{$data->email}}</span>
									</p>
										
								</div>
							</div>
						</div>	
					</div>
					<div class="box">
						<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li><a href="#Note" class="active" data-toggle="tab"><h5>Note</h5></a></li>
									<li><a href="#activity" data-toggle="tab"><h5>Activity</h5></a></li>
									<li><a href="#task" data-toggle="tab"><h5>Task</h5></a></li>
									<li><a href="#settings" data-toggle="tab"><h5>Event</h5></a></li>
									<li><a href="#chat" data-toggle="tab"><h5>Chat</h5></a></li>
									<li><a href="#Video" data-toggle="tab"><h5>Video</h5></a></li>
									<li><a href="#file" data-toggle="tab"><h5>File</h5></a></li>
									<li><a href="#whatsapp" data-toggle="tab"><h5>WhatsApp</h5></a></li>
									<li><a href="#mail" data-toggle="tab"><h5>Mail</h5></a></li>


								</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="Note">
									<div class="box">
										<form class="form">
													<div class="publisher publisher-multi bg-white b-1 mb-30">
														<textarea class="publisher-input auto-expand" rows="2" placeholder="Write something"></textarea>
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
										</form>
									</div>		
								</div> 
								<div class="tab-pane" id="activity">	
								<div class="box p-15">				
					<!-- Post -->
									<div class="post">
									<div class="user-block">
										<img class="img-bordered-sm rounded-circle" src="{{asset('assets/img/avatars/1.jpg')}}" alt="user image">
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
										<img class="img-bordered-sm rounded-circle" src="{{asset('assets/img/avatars/1.jpg')}}" alt="user image">
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
											<img class="img-fluid" src="{{asset('assets/images/com.jpg')}}" alt="Photo">
											</div>
											<!-- /.col -->
											<div class="col-sm-6">
											<div class="row">
												<div class="col-sm-6">
												<img class="img-fluid" src="{{asset('assets/images/reg.jpg')}}" alt="Photo">
												<br><br>
												<img class="img-fluid" src="{{asset('assets/images/com.jpg')}}" alt="Photo">
												</div>
												<!-- /.col -->
												<div class="col-sm-6">
												<img class="img-fluid" src="{{asset('assets/images/com.jpg')}}" alt="Photo">
												<br><br>
												<img class="img-fluid" src="{{asset('assets/images/com.jpg')}}" alt="Photo">
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
										<img class="img-bordered-sm rounded-circle" src="{{asset('../images/user7-128x128.jpg')}}" alt="user image">
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
								<!-- /.tab-pane -->
								<div class="tab-pane" id="settings">
									<div class="box">
										<form class="form">
											<div class="box-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Event Name</label>
															<input type="text" class="form-control" placeholder="Event Name">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="position-relative">
															<label for="date_of_birth">Duse Date</label>
															<input type="date" id="date_of_birth" name="due_date" class="form-control" placeholder="DOB">
															
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assignh">Assign\</label>
															<select class="form-control" id="course">
																<option value="">Brad Creedon</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assign">Category</label>
															<select class="form-control" id="course">
																<option value="">None</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
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
				   	
								<!-- /.tab-pane -->
								<div class="tab-pane" id="task">	
									<div class="box">
										<form class="form">
											<div class="box-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Task Name</label>
															<input type="text" class="form-control" placeholder="Task Name">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="position-relative">
															<label for="date_of_birth">Duse Date</label>
															<input type="date" id="date_of_birth" name="due_date" class="form-control" placeholder="DOB">
															
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assignh">Assign\</label>
															<select class="form-control" id="course">
																<option value="">Brad Creedon</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assign">Category</label>
															<select class="form-control" id="course">
																<option value="">None</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
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
								<!-- /.tab-pane -->
								<div class="tab-pane" id="settings">
									<div class="box">
										<form class="form">
											<div class="box-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Event Name</label>
															<input type="text" class="form-control" placeholder="Event Name">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="position-relative">
															<label for="date_of_birth">Duse Date</label>
															<input type="date" id="date_of_birth" name="due_date" class="form-control" placeholder="DOB">
															
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assignh">Assign\</label>
															<select class="form-control" id="course">
																<option value="">Brad Creedon</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<label for="Assign">Category</label>
															<select class="form-control" id="course">
																<option value="">None</option>
																<option value="1">Course1</option>
																<option value="2">Course2</option>
																<option value="3">Course3</option>
															</select>
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
								<!-- /.tab-pane -->
								<div class="tab-pane" id="mail">
									<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Compose New Message</h4>
									</div>
									<div class="modal-body">
											<div class="form-group">
												<input class="form-control" placeholder="To:">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Subject:">
											</div>
											<div class="form-group">
													<textarea id="compose-textarea" class="form-control" style="height: 300px">
													<p>Your Message Here....</p>
													</textarea>
											</div>
											<div class="form-group">
												<div class="btn btn-info btn-file">
												<i class="fa fa-paperclip"></i> Attachment
												<input type="file" name="attachment">
												</div>
												<p class="help-block">Max. 32MB</p>
											</div>
									</div>
									<div class="modal-footer">
									<div class="pull-right">
										<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
										<button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Send</button>
									</div>
									<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
									<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
									</div>
								</div>
								<div class="tab-pane" id="whatsapp">
									<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Message</h4>
									</div>
									<div class="modal-body">
											<div class="form-group">
												<input class="form-control" placeholder="To:">
											</div>
											<div class="publisher publisher-multi b-1 mb-30">
													<textarea class="publisher-input auto-expand" rows="4" placeholder="Type Message Here..."></textarea>
													<div class="flexbox">
														<div class="gap-items">
																<span class="publisher-btn file-group">
																<i class="fa fa-image file-browser"></i>
																<input type="file">
																</span>
																<a class="publisher-btn" href="#"><i class="fa fa-map-marker"></i></a>
																<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
														</div>
														<button class="btn btn-sm btn-bold btn-primary">Send</button>
													</div>
												</div>		
									</div>
								</div>
								<div class="tab-pane" id="file">
								<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Upload File</h4>
									</div>
									<div class="modal-body">
											<div class="form-group">
												<input class="form-control" placeholder="Title">
											</div>
												
											<div class="publisher publisher-multi b-1 mb-30">
													<textarea class="publisher-input auto-expand" rows="4" placeholder="Description"></textarea>
													<div class="form-group">
												<div class="btn btn-info btn-file">
												<i class="fa fa-paperclip"></i> File
												<input type="file" name="attachment">
												</div>
											</div>
									</div>	

									<div class="modal-footer">
									<div class="pull-right">
										<button type="submit" class="btn btn-primary"> Save</button>
									</div>
									<button type="reset" class="btn btn-danger"> Close</button>
									</div>	
									</div>
								</div>	
								<div class="tab-pane" id="chat">
									<div class="box">
									<div class="col-12">
										<div class="box-header with-border">
											<h4 class="box-title">Resent Chat</h4>
										</div>
										<div class="box-body p-0">
										<div class="media-list media-list-hover">
											<a class="media media-single" href="#">
											<h4 class="w-50 text-gray font-weight-500">10:10</h4>
											<div class="media-body pl-15 bl-5 rounded border-primary">
												<p>Morbi quis ex eu arcu auctor sagittis.</p>
											</div>
											</a>

											<a class="media media-single" href="#">
											<h4 class="w-50 text-gray font-weight-500">08:40</h4>
											<div class="media-body pl-15 bl-5 rounded border-success">
												<p>Proin iaculis eros non odio ornare efficitur.</p>
											</div>
											</a>

											<a class="media media-single" href="#">
											<h4 class="w-50 text-gray font-weight-500">07:10</h4>
											<div class="media-body pl-15 bl-5 rounded border-info">
												<p>In mattis mi ut posuere consectetur.</p>
											</div>
											</a>

											<a class="media media-single" href="#">
											<h4 class="w-50 text-gray font-weight-500">01:15</h4>
											<div class="media-body pl-15 bl-5 rounded border-danger">
												<p>Morbi quis ex eu arcu auctor sagittis.</p>
											</div>
											</a>

											<a class="media media-single" href="#">
											<h4 class="w-50 text-gray font-weight-500">23:12</h4>
											<div class="media-body pl-15 bl-5 rounded border-warning">
												<p>Morbi quis ex eu arcu auctor sagittis.</p>
											</div>
											</a>

										</div>
									</div>
									</div>
											</div>
										</div>		
								</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
				  <div class="box">
					<div class="box-body pt-10">
						<div class="box">
							<div class="with-border">
								<h4 class="box-title">Upcomig Activity</h4>
							</div>
							<div class="box-body p-0">
								<div class="media-list media-list-hover">
									<a class="media media-single" href="#">
										<span class="avatar  bg-warning">
											<i class="fa fa-star"></i></span>
										<div class="media-body">
											<p>Aenean tincidunt tortor sit amet erat rutrum, vel condimentum ipsum gravida.</p>
											<span>55 min ago</span>
										</div>
									</a>
									<a class="media media-single" href="#">
										<span class="avatar bg-warning">
										<i class="fa fa-star"></i></span>

										<div class="media-body">
											<p>Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</p>
											<span>Yesterday</span>
										</div>
									</a>
								</div>
							</div>
							<div class="with-border">
								<h4 class="box-title">Upcomig Event</h4>
							</div>
							<div class="box-body p-0">
								<div class="media-list media-list-hover">
									<a class="media media-single" href="#">
										<span class="avatar  bg-info">
											<i class="fa fa-calendar"></i></span>
										<div class="media-body">
											<p>Review Meeting</p>
											<span>Related to task</span>
											<span>4:30pm to 6:00</span>

										</div>
									</a>
									<a class="media media-single" href="#">
									<span class="avatar  bg-info">
									<i class="fa fa-calendar"></i></span>

										<div class="media-body">
										<p>Review Meeting</p>
											<span>Related to task</span>
											<span>24-06-2020</span>

										</div>
									</a>
								</div>
							</div>
						</div>
			 		</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /. box -->
				</div>
			</div>	

        </section>
    </div>
</div>    

@endsection('content')