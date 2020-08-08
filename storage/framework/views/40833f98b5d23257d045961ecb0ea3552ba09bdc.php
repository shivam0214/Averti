<?php $__env->startSection('content'); ?> 

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		
		 <!-- Step wizard -->
		  <div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">Hey!</h4>
			  <h6 class="box-subtitle">You can find the <a href="http://www.jquery-steps.com/" target="_blank"> </a></h6>		
			</div>
			<!-- /.box-header -->
            <section class="wizardform">
<div class="mid">
<div class="container">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 offset-lg-1">
<div class="row shadow">
<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 p-0">
<div class="img">
<div class="pics"></div>
</div>
</div>
<div class="col-sm-12 col-xs-12 col-md-8 col-lg-7 col-xs-12 form-box p-0">
<form method="POST" action="<?php echo e(route('staff_booking')); ?>" >
<?php echo csrf_field(); ?>
<fieldset>
<div class="icongol"><img src="assets/images/banner/hello.png"></div>
    <div class="form-group">
        <label>Select disease..</label>
        <select class="form-control select2" style="width: 100%;" name="disease_id" onChange="getstaff(this.value)">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($record['id']); ?>"><?php echo e($record['disease']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>
<div class="icongol"><img src="assets/images/banner/location.png"></div>
    <div class="form-group">
        <label>Doctor</label>
        <input type="hidden"  class="form-control" id="staff_id" name="staff_id">

        <input type="text" class="form-control" id="staff_name" name="staff_name">
    </div>


<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>
<div class="icongol"><img src="assets/images/banner/birthday-cake.png"></div>
    <div class="form-group">
        <label for="where">Description</label>
        <input type="textarea" class="form-control" id="description" name="description" >
        </div>
    <div class="f1-buttons">
        <button type="button" class="btn btn-previous">Previous</button>
        <button type="button" class="btn btn-next">Next</button>
    </div>
</fieldset>

<fieldset>
<div class="icongol"><img src="assets/images/banner/wedding.png"></div>
    <div class="form-group">
            <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-picture-o"></i> Upload Picture
            </a>							
            <input id="thumbnail" class="form-control" type="text" name="profile_image"  name="filepath">
            </span>
        </div>
    </div>	
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>


<fieldset>
<div class="icongol"><img src="assets/images/banner/mission-accomplished.png"></div>
<h4>What would you like to accomplish (Max 3)</h4>
<h5>Your needs are matched with the advisor's specialties.</h5>
<div id="affected2">

<input type="radio" name="set 4" title="Home Purchase">
<input type="radio" name="set 4" title="Manage New Wealth">
<input type="radio" name="set 4" title="Pay Down Debt">
<input type="radio" name="set 4" title="Plan for Retirement">
<input type="radio" name="set 4" title="Improve  Investment Strategy">
<input type="radio" name="set 4" title="Plan for College Savings">
<input type="radio" name="set 4" title="Employee stock options">
<input type="radio" name="set 4" title="Family Planning">
<input type="radio" name="set 4" title="Optimize Tax Strategy">
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>
<div class="icongol"><img src="assets/images/banner/work.png"></div>
<h4>What's your occupation?</h4>
<h5>Some fields require unique financial advice.</h5>
<div class="form-group">

<input type="text" name="f1-first-name" placeholder="What's your occupation?" class="f1-first-name form-control" id="f1-first-name">
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>


<fieldset>
<div class="icongol"><img src="assets/images/banner/dolar.png"></div>
<h4>What is your household income?</h4>
<h5>This enables an advisor to create a more customized solution for you.</h5>
<div class="form-group">
<div class="row">
    <div class="col-sm-12">
      <div id="slider-range"></div>
    </div>
  </div>
  <div class="row slider-labels">
    <div class="col-lg-6 text-left caption">
      <strong>Min:</strong> <span id="slider-range-value1"></span>
    </div>
    <div class="col-lg-6 text-right caption">
      <strong>Max:</strong> <span id="slider-range-value2"></span>
    </div>
  </div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>
<fieldset>
<div class="icongol"><img src="assets/images/banner/money.png"></div>
<h4>What are your total savings?</h4>
<h5>Include retirement accounts, investments, and cash. This gives us an idea of your financial situation.</h5>
<div class="form-group">
<div class="row">
    <div class="col-sm-12">
      <div id="slider-range1"></div>
    </div>
  </div>
  <div class="row slider-labels">
    <div class="col-lg-6 text-left caption">
      <strong>Min:</strong> <span id="slider-range-value3"></span>
    </div>
    <div class="col-lg-6 text-right caption">
      <strong>Max:</strong> <span id="slider-range-value4"></span>
    </div>
  </div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>

<h4>Almost there! Is this you?</h4>
<div class="form-group">
<div class="myname">Ajad Rawat</div>
<div class="myinfo">
<ul>
<li><div class="circleicon"><img src="assets/images/banner/location.png">20130</div></li>
<li><div class="circleicon"><img src="assets/images/banner/birthday-cake.png">Under 30</div></li>
<li><div class="circleicon"><img src="assets/images/banner/work.png">Occupation</div></li>
</ul>  
</div>
<div class="information">
<ul>
<li>Marital status<span>Single</span></li>
<li>Goals<span>Plan for Retirement</span></li>
<li>Income<span>$200k - $400k</span></li>
<li>Savings<span>$600k - $800k</span></li>
</ul>
</div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>
<fieldset>
<div class="icongol"><img src="assets/images/banner/congratulation.png"></div>
<h4>As, we've found three great advisor matches for you!</h4>
<h5>Your information is confidential and protected.</h5>
<div class="form-group">
<input type="text" name="f1-email" placeholder="Phone Number" class="f1-email form-control" id="located">
<input type="email" name="f1-email" placeholder="Email Address" class="f1-email form-control" id="located">
</div>


<div class="f1-buttons">

<button type="button" class="btn btn-previous">Previous</button>
<button type="submit" class="btn btn-submit">Submit</button>
</div>
</fieldset>

<div class="f1-steps">
<div class="f1-progress">
<div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
</div>
<div class="f1-step active">


</div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
</div>
</form>
</div>
 </div>
</div>
 </div>
</div>
</div>
</section>

		  </div>
		  <!-- /.box -->

		
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
<?php $__env->stopSection(); ?>
<script>
function getstaff(id){
//	console.log(id);
	$.ajax({
		type: "GET",
		url: '/getstaff_name',
		data: {disease_id: id,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( data ) {
			console.log(data);
		//	document.getElementById("to").innerHTML = data.mail_result;
			$("#staff_name").val(data.result.name)
			$("#staff_id").val(data.result.id)

		}
	});
}

</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/user_staff_booking.blade.php ENDPATH**/ ?>