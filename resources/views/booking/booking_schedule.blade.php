@extends('layouts.app')
@php
@$bookingav = @$bookingav[0];
@$bookingav['available'] = json_decode(@$bookingav['available'],true);
@endphp

@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Form Wizard</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Step wizard -->
		  <div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">Booking Availablily</h4>
			  <h6 class="box-subtitle">You can add your Availablity</h6>		
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="{{route('bookingsetting')}}" class="" method="post">
				@csrf
				<input type="hidden" value="{{@$bookingav['id']}}" name="id">
					<!-- Step 1 -->
					<h6>Client Information</h6>
					<section>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Languages (s) you and your staff speak ?</label>
									@php $select = (!empty(@$bookingav['languages'])?json_decode(@$bookingav['languages'],true):[]) @endphp
									<select id="multiple" multiple name="language[]">
									@foreach (@$language as $record)
									
										<option value="{{$record['name']}}" @if(in_array($record['name'],@$select)) selected @endif>{{$record['name']}}</option>
									@endforeach
									  </select>
									  
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Patient type </label>
									@php $select =(!empty(@$bookingav['languages'])?json_decode(@$bookingav['patient_type'],true):[]) @endphp
									<select id="multiple1" name="patient_type[]" multiple>
										<option value="New_born_babys"  @if(in_array('New_born_babys',@$select)) selected @endif>New born babys</option>
										<option value="Kids"  @if(in_array('Kids',$select)) selected @endif>Kids</option>
										<option value="Teen"  @if(in_array('Teen',$select)) selected @endif>Teen</option>
									  </select>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Doctor type</label>
									
									<select id="multiple2" name="doctor_type[]" multiple>
									@php $select =  (!empty(@$bookingav['languages'])?json_decode(@$bookingav['doctor_type'],true):[]) @endphp
										@foreach ($doctor as $v)
											<option value="{{$v}}" @if(in_array($v,@$select)) selected @endif>{{str_replace('_',' ',$v)}}</option>
										@endforeach
										
										
									  </select>
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName6">Patient Checking  location </label>
									@php $select = (!empty(@$bookingav['languages'])?json_decode(@$bookingav['where'],true):[]) @endphp
									<select id="multiple6" name="where[]" multiple >
										<option value="Clinic" @if(in_array('Clinic',@$select)) selected @endif>Clinic</option>
										<option value="Home" @if(in_array('Home',@$select)) selected @endif>Home</option>
										<option value="Hospital" @if(in_array('Hospital',@$select)) selected @endif>Hospital</option>
										<option value="Online" @if(in_array('Online',@$select)) selected @endif>Online</option>
									  </select>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="infoclient">
								<p>Add your Per day Availablity</p>
							</div>
							
						</div>
							<div class="dateandtimezone">
								<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label for="username123"> Sunday</label>
									<div class="row mt-10">
										<div class="col-6">
											<input type="text" placeholder="Appointment Start" name="hours[sun_start]" id="timepicker" value={{@$bookingav['available']['sun_start']}}>
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[sun_end]" id="timepicker" value={{@$bookingav['available']['sun_end']}}></div>
									</div>
									
								</div>
								
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="username123"> Monday</label>
									<div class="row mt-10">
										<div class="col-6">
											<input type="text" placeholder="Appointment Start" name="hours[mon_start]" id="timepicker" value={{@$bookingav['available']['mon_start']}}>
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[mon_end]" id="timepicker" value={{@$bookingav['available']['mon_end']}}></div>
									</div>
								</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Tuesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours[tue_start]" id="timepicker" value={{@$bookingav['available']['tue_start']}}>
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[tue_end]" id="timepicker" value={{@$bookingav['available']['tue_end']}}></div>
								</div>
								
							</div>
							
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Wednesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours[wed_start]" id="timepicker" value={{@$bookingav['available']['wed_start']}}>
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[wed_end]" id="timepicker" value={{@$bookingav['available']['wed_end']}}></div>
								</div>
								
							</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Thursday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours[thu_start]" id="timepicker" value={{@$bookingav['available']['thu_start']}}>
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[thu_end]" id="timepicker" value={{@$bookingav['available']['thu_end']}}></div>
							</div>
							
						</div>
						
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Friday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours[fri_start]"  id="timepicker" value={{@$bookingav['available']['fri_start']}}>
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End"  name="hours[fir_end]" id="timepicker" value={{@$bookingav['available']['fir_end']}}></div>
							</div>
							
						</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="username123"> Saturday</label>
						<div class="row mt-10">
							<div class="col-6">
								<input type="text" placeholder="Appointment Start" name="hours[set_start]" id="timepicker" value={{@$bookingav['available']['set_start']}}>
							</div>
							<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[sat_end]" id="timepicker" value={{@$bookingav['available']['sat_end']}}></div>
						</div>
						
					</div>
			</div>
			{{--  <div class="col-6">
				<div class="form-group">
					<label for="username123"> Time Zone</label>
					<select class="custom-select form-control mt-10 p-10" id="Location1" name="location">
						<option value="">Select City</option>
						<option value="India">India</option>
						<option value="USA">USA</option>
						<option value="Dubai">Dubai</option>
					</select>
					
				</div>
		</div>  --}}
	
	</div>
	<input type="submit" class="btn btn-primary" name="submit" value="Submit">
					</section>
					
				
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- vertical wizard -->
		  
		<!-- /.content -->
	  </div>
  </div>
@endsection('content') 