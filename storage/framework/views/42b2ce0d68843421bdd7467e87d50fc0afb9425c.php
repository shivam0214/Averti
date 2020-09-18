<?php
@$bookingav = $bookingav[0];
@$time= json_decode(@$bookingav['available'],true);

@$sunday_satrt = date("H:i", strtotime($time['sun_start']));
@$sunday_end = date("H:i", strtotime($time['sun_end']));
@$time1 = new DateTime($sunday_satrt);
@$time2 = new DateTime( $sunday_end);
@$loopsunday = $time1->diff($time2)->format('%h')-1;

@$monday_start = date("H:i", strtotime($time['mon_start']));
@$monday_end = date("H:i", strtotime($time['mon_end']));
@$time1 = new DateTime($monday_start);
@$time2 = new DateTime( $monday_end);
@$loopmonday = $time1->diff($time2)->format('%h')-1;


@$tuesday_start = date("H:i", strtotime($time['tue_start']));
@$tuesday_end = date("H:i", strtotime($time['tue_end']));
@$time1 = new DateTime($tuesday_start);
@$time2 = new DateTime( $tuesday_end);
@$looptuesday = $time1->diff($time2)->format('%h')-1;


@$wednesday_start = date("H:i", strtotime($time['wed_start']));
@$wednesday_end = date("H:i", strtotime($time['wed_end']));
@$time1 = new DateTime($wednesday_start);
@$time2 = new DateTime( $wednesday_end);
@$loopwednesday = $time1->diff($time2)->format('%h')-1;


@$thursday_start = date("H:i", strtotime($time['thu_start']));
@$thursday_end = date("H:i", strtotime($time['thu_end']));
@$time1 = new DateTime($thursday_start);
@$time2 = new DateTime( $thursday_end);
@$loopthursday = $time1->diff($time2)->format('%h')-1;

@$friday_satrt = date("H:i", strtotime($time['fri_start']));
@$friday_end = date("H:i", strtotime($time['fri_end']));
@$time1 = new DateTime($friday_satrt);
@$time2 = new DateTime( $friday_end);
@$loopfriday = $time1->diff($time2)->format('%h')-1;

@$saturday_start = date("H:i", strtotime($time['sat_start']));
@$saturday_end = date("H:i", strtotime($time['sat_end']));
@$time1 = new DateTime($saturday_start);
@$time2 = new DateTime( $sunday_end);
@$loopsaturday = $time1->diff($time2)->format('%h')-1;
?>

<style>
table.table-responsive-sm {
    display: initial;
    padding: 0px 10px;   
}
[type="radio"]:not(:checked), [type="radio"]:checked {
  position: relative !important;
    left: -4px !important;
    opacity: 1 !important;
}
.actions.clearfix ul li a {
    color: #000 !important;
    border: 1px solid #ff0303 !important;
}
</style>

<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Booking</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page"> Service</li>
								<li class="breadcrumb-item active" aria-current="page">You can find the offical website</li>
								
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
			
			<!-- /.box-header -->
			<div class="box-body wizard-content stepdesign">
				<form action="<?php echo e(route('savebook')); ?>" class="tab-wizard wizard-circle" method="post">
					<!-- Step 1 -->
					<h6>Client Information</h6>
					<section>
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName5">languages</label>
									<select class="custom-select form-control" id="languages" name="languages">
                                    <?php $languages = json_decode($bookingav['languages'],true) ?>
										<?php $__currentLoopData = @$languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($record); ?>" ><?php echo e($record); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									</select></div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="lastName1">Patient type</label>
									<select class="custom-select form-control" id="patient_type" name="patient_type">
										 <?php $patient_type = json_decode($bookingav['patient_type'],true) ?>
										<?php $__currentLoopData = @$patient_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($record); ?>" ><?php echo e($record); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select> </div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="emailAddress1">Number of Persons</label>
									<input type="number" class="form-control" id="emailAddress1" name="numberpersons"> </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="addressline1">Where</label>
									<select class="custom-select form-control" name="where">
										 <?php $where = json_decode($bookingav['where'],true) ?>
										<?php $__currentLoopData = @$where; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($record); ?>" ><?php echo e($record); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									  </select>
								 </div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="phoneNumber1">Doctor type</label>
									<select class="custom-select form-control" id="doctor_type" name="doctor_type">
										<?php $doctor_type = json_decode($bookingav['doctor_type'],true) ?>
										<?php $__currentLoopData = $doctor_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($v); ?>"><?php echo e(str_replace('_',' ',$v)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select> </div>
							</div>
						</div>
						
					
					</section>
					<!-- Step 2 -->
					<h6> Time</h6>
                    <section>
						<div class="informationhere">
						<p>	</p>
						</div>
						
						<div class="row">
							<div class="col-lg-12" id="timetable">
								<div class="table-responsive-sm">
								<table class="table-responsive-sm">
  <thead>
    <tr>
      <th><?php echo e(date('D, d F')); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php for($i=0;$i<=$loopsunday;$i++): ?>
      <?php if(date('H:i a')>date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($sunday_satrt)))): ?>
<?php else: ?> 
<tr><td><input type="radio" class="" name="hours" value="<?php echo e(date('Y-m-d')); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($sunday_satrt) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($sunday_satrt) ) )); ?></td></tr>
<?php endif; ?>



<?php endfor; ?>
  </tbody>
</table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +1 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<=$loopmonday;$i++): ?>
<tr><td><input type="radio" class="form-check-input" name="hours" value="<?php echo e(date('Y-m-d', strtotime(' +1 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($monday_start) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($monday_start) ) )); ?></td></tr>
<?php endfor; ?>
    
    </tbody>
  </table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +2 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<=$looptuesday;$i++): ?>
<tr><td><input type="radio" class="form-check-input" name="hours" value="<?php echo e(date('Y-m-d', strtotime(' +2 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($tuesday_start) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($tuesday_start) ) )); ?></td></tr>
<?php endfor; ?>
    </tbody>
  </table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +3 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
     <?php for($i=0;$i<=$loopwednesday;$i++): ?>
<tr><td><input type="radio" class="form-check-input" name="hours" value="<?php echo e(date('Y-m-d', strtotime(' +3 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($wednesday_start) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($wednesday_start) ) )); ?></td></tr>
<?php endfor; ?>
    </tbody>
  </table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +4 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<=$loopthursday;$i++): ?>
     <tr><td><input type="radio" class="form-check-input" name="hours" value="<?php echo e(date('Y-m-d', strtotime(' +4 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($thursday_start) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($thursday_start) ) )); ?></td></tr>

<?php endfor; ?>
    </tbody>
  </table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +5 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<=$loopfriday;$i++): ?>
<tr><td><input type="radio" class="form-check-input" name="hours"value="<?php echo e(date('Y-m-d', strtotime(' +5 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($friday_satrt) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($friday_satrt) ) )); ?></td></tr>
<?php endfor; ?>
    </tbody>
  </table>
   <table class="table-responsive-sm">
    <thead>
      <tr>
        <th><?php echo e(date('D, d F', strtotime(' +6 day'))); ?></th>
      </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<=$loopsaturday;$i++): ?>
<tr><td><input type="radio" class="form-check-input" name="hours" value="<?php echo e(date('Y-m-d', strtotime(' +6 day'))); ?>_<?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($saturday_start) ) )); ?>"><?php echo e(date( 'H:i a', strtotime( '+'.$i.' hour' , strtotime($saturday_start) ) )); ?></td></tr>
<?php endfor; ?>
    </tbody>
  </table>
								</div>
							</div>
						</div>
					</section>
					<!-- Step 3 -->
					<h6>Details</h6>
					<section>
						<div class="informationhere">
							<p></p>
							</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="int123">First Name:</label>
									<input type="text" class="form-control" name="firstname" id="int123">
								</div>
							</div>
							<div class="col-md-6">							
								<div class="form-group">
									<label for="int234">Last Name:</label>
									<input type="text" class="form-control" id="int234" name="lastname" placeholder="" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="int123">Phone:</label>
									<input type="text" class="form-control" id="int123" name="phone">
								</div>
							</div>
							<div class="col-md-6">							
								<div class="form-group">
									<label for="int234">Email:</label>
									<input type="text" class="form-control" id="int234" placeholder="" name="email">
								</div>
							</div>

							<div class="col-md-12">							
								<div class="form-group">
									<label for="int234">Notes (medical issue, request, etc.)</label>
									<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
								</div>
							</div>
						</div>
					</section>
					<!-- Step 4 -->
					
					<h6>Payment</h6>
					<section>
						<div class="row">
							<div class="col-4">
								<div class="atmholder">
								<div class="form-group">
									<label for="decisions1">Card Holder Name</label>
									<input type="text" class="form-control" name="cardname" id="emailAddress1"> 
								</div>

								<div class="form-group">
									<label for="decisions1">Email</label>
									<input type="email" class="form-control" name="cardemial" id="emailAddress1"> 
								</div>

								<div class="form-group">
									<label for="decisions1">Card Number</label>
									<input type="text" class="form-control" id="emailAddress1" name="cardnumber"> 
								</div>

								<div class="form-group">
									<label for="decisions1">Expiry Month / Year</label>
									<div class="row">
										<div class="col-lg-5">
											<select class="custom-select form-control" id="location2" name="month">
												<option value="">Select City</option>
												<option value="Amsterdam">India</option>
												<option value="Berlin">USA</option>
												<option value="Frankfurt">Dubai</option>
											</select>
										</div>
										<div class="col-lg-5">
											<select class="custom-select form-control" id="location2" name="year">
												<option value="">Select City</option>
												<option value="Amsterdam">India</option>
												<option value="Berlin">USA</option>
												<option value="Frankfurt">Dubai</option>
											</select>
										</div>

										<div class="col-lg-2">
											<div class="form-group">
										<input type="text" class="form-control" id="emailAddress1" name="cvv" placeholder="CVV"> 
											</div>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="c-inputs-stacked">
										<input type="checkbox" name="checkterms" id="checkbox_1">
										<label for="checkbox_1" class="d-block">Please Accept the terms and condition</label>

									</div>
								</div>
								<div class="form-group">
								<button href="#" class="menuitem floatleft">Submit</button>
							</div>
							</div>
						</div>
						</div>
					</section>
					<h6>Done</h6>
					<section>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="decisions1">Comments</label>
									<textarea name="decisions" id="decisions1" name="description" rows="4" class="form-control"></textarea>
								</div>
								
							</div>
						</div>
					</section>
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- vertical wizard -->
		  
		  
		  

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/booking/booking.blade.php ENDPATH**/ ?>