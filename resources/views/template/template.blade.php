@extends('layouts.app')

@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Templates</h3>
					
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="#" target="_blank">
						  <img src="{{asset('assets/images/about/07.jpg')}}"  height="250" width="100%" alt="welcome email page">
						</a>
					</div>
					<div class="box-body">
					<a class="d-block" href="#" target="_blank">
					<h4 class="box-title d-block text-center">Financial </h4>    
					</a>      
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="{{route('staff_user')}}" target="_blank">
						  <img src="{{asset('assets/images/about/04.jpg')}}" height="250" width="100%" alt="Verify Emial page">
						</a>
					</div>
					<div class="box-body">
					<a class="d-block" href="{{route('staff_list')}}" target="_blank">
					<h4 class="box-title d-block text-center">Doctors</h4>          
					</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="#" target="_blank">
						  <img src="{{asset('assets/images/about/fitness.png')}}" height="250" width="100%" alt="Change Password page">
						</a>
					</div>
					<div class="box-body">
					<a class="d-block" href="#" target="_blank">
					<h4 class="box-title d-block text-center">Fitness </h4>          
					</a>	
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
				  <div class="box-header with-border">
				  <a href="{{route('view_product')}}" target="_blank">
						  <img src="{{asset('assets/images/about/food.png')}}" height="250" width="100%" alt="Expired Card page">
						</a>
					</div>
					
					<div class="box-body">
					<a class="d-block" href="{{route('view_product')}}" target="_blank">
					<h4 class="box-title d-block text-center">Food Delivery</h4>
					</a>

					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="#" target="_blank">
						  <img src="{{asset('assets/images/about/travel.jpg')}}" height="250" width="100%" alt="Closed Account page">
						</a>
				
					</div>
					<div class="box-body">
					<a class="d-block" href="#" target="_blank">
					<h4 class="box-title d-block text-center">Travel Tours</h4>          
					</a>
							</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="#" target="_blank">
						  <img src="{{asset('assets/images/about/auction.png')}}" height="250" width="100%" alt="Verify Emial page">
						</a>
					</div>
					<div class="box-body">
					<a class="d-block" href="#" target="_blank">
					<h4 class="box-title d-block text-center">Auction</h4>          
					</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
			</div>

			<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					<a class="d-block" href="#" target="_blank">
						  <img src="{{asset('assets/images/about/gym.png')}}" height="250" width="100%" alt="Change Password page">
						</a>
					</div>
					<div class="box-body">
					<a class="d-block" href="#" target="_blank">
					<h4 class="box-title d-block text-center">GYM </h4>          
					</a>	
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection('content') 