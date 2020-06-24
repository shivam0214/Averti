<?php $__env->startSection('content'); ?>
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
				<form action="#" class="tab-wizard wizard-circle">
					<!-- Step 1 -->
					<h6>Client Information</h6>
					<section>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Languages (s) you and your staff speak ?</label>
									<select id="multiple" multiple>
									<?php $__currentLoopData = @$language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($record['id']); ?>"><?php echo e($record['name']); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									  </select>
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Patient type </label>
									<select id="multiple1" multiple>
										<option value="1">New born babys</option>
										<option value="2">Kids</option>
										<option value="3">Teen</option>
									  </select>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Doctor type</label>
									<select id="multiple2" multiple>
										<option value="Hematologists">Hematologists </option>
										<option value="Gastroenterologists">Gastroenterologists</option>
										<option value="Family_Physicians">Family Physicians</option>
										<option value="Nephrologists">Nephrologists </option>
										<option value="Neurologists">Neurologists</option>
										<option value="Oncologists">Oncologists</option>
										<option value="Ophthalmologists">Ophthalmologists </option>
										<option value="Osteopaths">Osteopaths</option>
										<option value="Otolaryngologists">Otolaryngologists</option>
										<option value="Physiatrists">Physiatrists </option>
										<option value="Emergency_Medicine_Specialists">Emergency Medicine Specialists</option>
										<option value="Cardiologists">Cardiologists</option>
										
									  </select>
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Patient Checking  location </label>
									<select id="multiple6" multiple>
										<option value="1">Clinic</option>
										<option value="2">Home</option>
										<option value="3">Hospital</option>
										<option value="3">Online</option>
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
											<input type="text" placeholder="Appointment Start" name="hours['sun_start']" id="timepicker">
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['sun_end']" id="timepicker"></div>
									</div>
									
								</div>
								
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="username123"> Monday</label>
									<div class="row mt-10">
										<div class="col-6">
											<input type="text" placeholder="Appointment Start" name="hours['mon_start']" id="timepicker">
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['mon_end']" id="timepicker"></div>
									</div>
								</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Tuesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours['tue_start']" id="timepicker">
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['tue_end']" id="timepicker"></div>
								</div>
								
							</div>
							
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Wednesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours['wed_start']" id="timepicker">
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['wed_end']" id="timepicker"></div>
								</div>
								
							</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Thursday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours['thu_start']" id="timepicker">
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['thu_end']" id="timepicker"></div>
							</div>
							
						</div>
						
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Friday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours['fri_start']"  id="timepicker">
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End"  name="hours['fir_end']" id="timepicker"></div>
							</div>
							
						</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="username123"> Saturday</label>
						<div class="row mt-10">
							<div class="col-6">
								<input type="text" placeholder="Appointment Start" name="hours['set_start']" id="timepicker">
							</div>
							<div class="col-6"><input type="text" placeholder="Appointment End" name="hours['sat_end']" id="timepicker"></div>
						</div>
						
					</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="username123"> Time Zone</label>
					<select class="custom-select form-control mt-10 p-10" id="Location1" name="location">
						<option value="">Select City</option>
						<option value="India">India</option>
						<option value="USA">USA</option>
						<option value="Dubai">Dubai</option>
					</select>
					
				</div>
		</div>
		<div class="col-md-12 mt-15">	
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.010331064419!2d77.34433141508181!3d28.59946688243089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce505285428e5%3A0x69053149a3ac635b!2sNoida%2022%20Main%20Rd%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1592720110458!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
	</div>
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
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/booking/booking_schedule.blade.php ENDPATH**/ ?>