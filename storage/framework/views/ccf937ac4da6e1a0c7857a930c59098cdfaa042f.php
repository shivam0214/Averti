<?php
@$bookingav = @$bookingav[0];
@$bookingav['available'] = json_decode(@$bookingav['available'],true);
?>

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
				<form action="<?php echo e(route('bookingsetting')); ?>" class="" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" value="<?php echo e(@$bookingav['id']); ?>" name="id">
					<!-- Step 1 -->
					<h6>Client Information</h6>
					<section>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Languages (s) you and your staff speak ?</label>
									<?php $select = (!empty(@$bookingav['languages'])?json_decode(@$bookingav['languages'],true):[]) ?>
									<select id="multiple" multiple name="language[]">
									<?php $__currentLoopData = @$language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<option value="<?php echo e($record['name']); ?>" <?php if(in_array($record['name'],$select)): ?> selected <?php endif; ?>><?php echo e($record['name']); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									  </select>
									  
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Patient type </label>
									<?php @$select =(!empty(@$bookingav['languages'])?json_decode(@$bookingav['patient_type'],true):[]) ?>
									<select id="multiple1" name="patient_type[]" multiple>
										<option value="New_born_babys"  <?php if(in_array('New_born_babys',@$select)): ?> selected <?php endif; ?>>New born babys</option>
										<option value="Kids"  <?php if(in_array('Kids',$select)): ?> selected <?php endif; ?>>Kids</option>
										<option value="Teen"  <?php if(in_array('Teen',$select)): ?> selected <?php endif; ?>>Teen</option>
									  </select>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName5">Doctor type</label>
									
									<select id="multiple2" name="doctor_type[]" multiple>
									<?php @$select =  (!empty(@$bookingav['languages'])?json_decode(@$bookingav['doctor_type'],true):[]) ?>
										<?php $__currentLoopData = @$doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($v); ?>" <?php if(in_array($v,@$select)): ?> selected <?php endif; ?>><?php echo e(str_replace('_',' ',$v)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
										
									  </select>
									 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName6">Patient Checking  location </label>
									<?php @$select = (!empty(@$bookingav['languages'])?json_decode(@$bookingav['where'],true):[]) ?>
									<select id="multiple6" name="where[]" multiple >
										<option value="Clinic" <?php if(in_array('Clinic',@$select)): ?> selected <?php endif; ?>>Clinic</option>
										<option value="Home" <?php if(in_array('Home',@$select)): ?> selected <?php endif; ?>>Home</option>
										<option value="Hospital" <?php if(in_array('Hospital',@$select)): ?> selected <?php endif; ?>>Hospital</option>
										<option value="Online" <?php if(in_array('Online',@$select)): ?> selected <?php endif; ?>>Online</option>
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
											<input type="text" placeholder="Appointment Start" name="hours[sun_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['sun_start']); ?>>
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[sun_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['sun_end']); ?>></div>
									</div>
									
								</div>
								
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="username123"> Monday</label>
									<div class="row mt-10">
										<div class="col-6">
											<input type="text" placeholder="Appointment Start" name="hours[mon_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['mon_start']); ?>>
										</div>
										<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[mon_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['mon_end']); ?>></div>
									</div>
								</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Tuesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours[tue_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['tue_start']); ?>>
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[tue_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['tue_end']); ?>></div>
								</div>
								
							</div>
							
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="username123"> Wednesday</label>
								<div class="row mt-10">
									<div class="col-6">
										<input type="text" placeholder="Appointment Start" name="hours[wed_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['wed_start']); ?>>
									</div>
									<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[wed_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['wed_end']); ?>></div>
								</div>
								
							</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Thursday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours[thu_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['thu_start']); ?>>
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[thu_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['thu_end']); ?>></div>
							</div>
							
						</div>
						
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="username123"> Friday</label>
							<div class="row mt-10">
								<div class="col-6">
									<input type="text" placeholder="Appointment Start" name="hours[fri_start]"  id="timepicker" value=<?php echo e(@$bookingav['available']['fri_start']); ?>>
								</div>
								<div class="col-6"><input type="text" placeholder="Appointment End"  name="hours[fir_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['fir_end']); ?>></div>
							</div>
							
						</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="username123"> Saturday</label>
						<div class="row mt-10">
							<div class="col-6">
								<input type="text" placeholder="Appointment Start" name="hours[set_start]" id="timepicker" value=<?php echo e(@$bookingav['available']['set_start']); ?>>
							</div>
							<div class="col-6"><input type="text" placeholder="Appointment End" name="hours[sat_end]" id="timepicker" value=<?php echo e(@$bookingav['available']['sat_end']); ?>></div>
						</div>
						
					</div>
			</div>
			
	
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
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/booking/booking_schedule.blade.php ENDPATH**/ ?>