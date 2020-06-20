@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	<div class="container-full">
		<section class="content">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="box">
					  	<div class="media-list media-list-divided media-list-hover">
							<div class="media align-items-center">
									<a class="avatar avatar-lg status-success" href="#">
										<img src="{{asset('assets/img/avatars/1.jpg')}}" alt="...">
									</a>
								<div class="media-body">
									<p>
									<a href="#"><strong>Sonya Frost</strong></a>
									</p>
									<p>Full Stack Developer</p>
									<p>Head at Anderson</p>
									<nav class="nav mt-2">
									<a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-github"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
									</nav>
						  		</div>
								<div class="media-right">
								<p><i class="fa fa-phone" aria-hidden="true"></i>
								<span>+555444555</span> </p>
								<p><i class="ti-email"></i> 
								<span>sonya@gmail.com
								</span>
								</p>
									
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 col-xl-9">
					<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li><a href="#Note" class="active" data-toggle="tab">Note</a></li>
								<li><a href="#activity" data-toggle="tab">Task</a></li>
								<li><a href="#settings" data-toggle="tab">Event</a></li>
								<li><a href="#chat" data-toggle="tab">Chat</a></li>
								<li><a href="#Video" data-toggle="tab">Video</a></li>

							</ul>
						<div class="tab-content">
							<div class="active tab-pane" id="Note">
								<div class="box">
									<form class="form">
										<div class="box-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Note</label>
														<textarea type="text" row="7" class="form-control" placeholder="Add Note">
														</textarea>
													</div>
												</div>
											</div>			
												<div class="box-footer text-right">
													<div class="form-group">
																<label></label>												
																<button type="submit" class="btn btn-rounded btn-primary btn-outline">
																post
															</button>
													</div>
												</div>	
										</div>
									</form>
								</div>		
							</div>    	
							<!-- /.tab-pane -->
							<div class="tab-pane" id="activity">	
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
										<span class="text-fade">by Johne</span>
									</div>
									</a>

									<a class="media media-single" href="#">
									<h4 class="w-50 text-gray font-weight-500">08:40</h4>
									<div class="media-body pl-15 bl-5 rounded border-success">
										<p>Proin iaculis eros non odio ornare efficitur.</p>
										<span class="text-fade">by Amla</span>
									</div>
									</a>

									<a class="media media-single" href="#">
									<h4 class="w-50 text-gray font-weight-500">07:10</h4>
									<div class="media-body pl-15 bl-5 rounded border-info">
										<p>In mattis mi ut posuere consectetur.</p>
										<span class="text-fade">by Josef</span>
									</div>
									</a>

									<a class="media media-single" href="#">
									<h4 class="w-50 text-gray font-weight-500">01:15</h4>
									<div class="media-body pl-15 bl-5 rounded border-danger">
										<p>Morbi quis ex eu arcu auctor sagittis.</p>
										<span class="text-fade">by Rima</span>
									</div>
									</a>

									<a class="media media-single" href="#">
									<h4 class="w-50 text-gray font-weight-500">23:12</h4>
									<div class="media-body pl-15 bl-5 rounded border-warning">
										<p>Morbi quis ex eu arcu auctor sagittis.</p>
										<span class="text-fade">by Alaxa</span>
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
        </section>
    </div>
</div>        
@endsection('content')