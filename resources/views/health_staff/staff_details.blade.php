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
										<img src="<?php echo (($details['usermeta_staff_booking']['profile_image'])!= NULL) ? url($details['usermeta_staff_booking']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;">
										
									</a>
								<div class="media-body">
									<p>
									<a href="#"><strong><h4>{{$details['user_staff_booking']['name']}}</h4></strong></a>
									</p>
									<nav class="nav mt-2">
									<a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-github"></i></a>
									<a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
									</nav>
								</div>
								<div class="media-right">
									<p><i class="fa fa-phone" aria-hidden="true"></i>
									<span>+{{$details['usermeta_staff_booking']['phone_no']}}</span> </p>
									<p><i class="ti-email"></i> 
									<span>{{$details['user_staff_booking']['email']}}</span>
									</p>
										
								</div>
							</div>
						</div>	
					</div>
			</div>    
        </div>

    <div class="box">    
    <div class="col-lg-8 col-sm-10 col-md-8 col-xs-12 offset-lg-2 offset-md-2 offset-lg-1">
                
                <form name="abc" action="#" method="post">
                <div class="formbox">

                    <div class="row">
                                <div class="col-md-12">
                                <div class="profileinfo">
                                <div class="profilepic">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>	
                            </div>	
                            <div class="profile-details">
                                <ul>
                                    <li>Name: <span>Ramu </span></li>
                                    <li>Last Name: <span>Kaka</span></li>
                                    <li>Age: <span>32</span></li>
                                    <li>Illness: <span>fever</span></li>
                                    <li>Address: Noida sectore 63 G-20</li>
                                </ul>	
                            </div>
                        </div>
                                </div>
                            </div>
                                    <div class="box-header with-border">
                                    <h4 class="box-title">Sample form 1</h4>
                                    </div>
                                    <!-- /.box-header -->
                                <div class="accordion" id="exampleAccordion">
                <div class="card">
                <div class="card-header" id="exItem1Header">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#exItem1" aria-expanded="false" aria-controls="exItem1">Expandable Item 1</button>
                    </h5>
                </div>
                <div id="exItem1" class="collapse" aria-labelledby="exItem1Header" data-parent="#exampleAccordion">
                <div class="profileinfo">
                                <div class="profilepic">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>	
                            </div>	
                            <div class="profile-details">
                                <ul>
                                    <li>Name: <span>Ramu </span></li>
                                    <li>Last Name: <span>Kaka</span></li>
                                    <li>Age: <span>32</span></li>
                                    <li>Illness: <span>fever</span></li>
                                    <li>Address: Noida sectore 63 G-20</li>
                                </ul>	
                            </div>
                        </div>

                        <div class="box-body">
                                            
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Title</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Select1</option>
                                                    <option>Select2</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                <option>Select1</option>
                                                    <option>Select2</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            
                                        
                                            <div class="form-group">
                                            <label>Discription</label>
                                            <textarea rows="5" class="form-control" placeholder="Discription"></textarea>
                                            </div>
                                            <div class="form-group">
                                            <input type="Submit" value="Submit" class="btn btn-rounded btn-primary btn-outline pull-right mb-20">
                                            </div>
                                        </div>
                </div>
                </div>

                <div class="card">
                <div class="card-header" id="exItem2Header">
                    <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#exItem2" aria-expanded="true" aria-controls="exItem2">Expandable Item 2</button>
                    </h5>
                </div>
                <div id="exItem2" class="collapse show" aria-labelledby="exItem2Header" data-parent="#exampleAccordion">
                    <div class="profileinfo">
                                <div class="profilepic">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>	
                            </div>	
                            <div class="profile-details">
                                <ul>
                                    <li>Name: <span>Ramu </span></li>
                                    <li>Last Name: <span>Kaka</span></li>
                                    <li>Age: <span>32</span></li>
                                    <li>Illness: <span>fever</span></li>
                                    <li>Address: Noida sectore 63 G-20</li>
                                </ul>	
                            </div>
                        </div>

                        <div class="box-body">
                                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Title</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Select1</option>
                                        <option>Select2</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                <option>Select1</option>
                                                    <option>Select2</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            
                                        
                                            <div class="form-group">
                                            <label>Discription</label>
                                            <textarea rows="5" class="form-control" placeholder="Discription"></textarea>
                                            </div>
                                            <div class="form-group">
                                            <input type="Submit" value="Submit" class="btn btn-rounded btn-primary btn-outline pull-right mb-20">
                                            </div>

                                        </div>

                </div>

                <div class="card">
                <div class="card-header" id="exItem3Header">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#exItem3" aria-expanded="false" aria-controls="exItem3">Expandable Item 3</button>
                    </h5>
                </div>
                <div id="exItem3" class="collapse" aria-labelledby="exItem3Header" data-parent="#exampleAccordion">
                    <div class="card-body">This is the card body. Your content is hidden initially. It is shown by clicking on the card header.</div>
                </div>
                </div>
            </div>
            </div>
                </form>
        </div>
     </div>   
        </section>
     </div>   
</div>
@endsection('content')
