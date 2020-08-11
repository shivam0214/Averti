<style>
.formbox {
    background: #272e48;
    border: #41475e 1px solid;
    margin: 30px 0px;
    border-radius: 20px;
    display: inline-block;
    width: 100%;
    overflow: hidden;
}
.profileinfo {
    display: inline-block;
    width: 100%;
    padding: 20px;
}

.profileinfo .profilepic {
    width: 25%;
    float: left;
    border-radius: 6px;
    overflow: hidden;
}

.profileinfo .profilepic img {
    width: 100%;
    overflow: hidden;
}

.profile-details {
    width: 75%;
    float: left;
    padding-left: 30px;
}

.profile-details ul {
    margin: 0;
    border: #41475e 1px solid;
    padding: 0;
    display: inline-block;
    width: 100%;
    padding: 20px;
    border-radius: 10px;
}

.profile-details ul li {
    width: 48%;
    float: left;
    font-size: 18px;
    color: #bdd1f8;
    list-style: none;
    border-bottom: #41475e 1px solid;
    line-height: 30px;
    padding: 5px 0px;
    text-transform: capitalize;
}

.profile-details ul li span {
    float: right;
    text-align: right;
    color: #8a99b5;
}

.profile-details ul li:nth-child(odd) {
    margin-right: 2%;
}

.profile-details ul li:nth-child(even) {
    margin-left: 2%;
}

.profile-details ul li:last-child {
    border: 0px;
    padding-bottom: 0px;
    padding-top: 10px;
}
.formbox .card {
    background: #21273e !important;
    border-radius: 0px;
    padding: 0px;
    margin: 0px;
}

.formbox .card-header {
    padding: 0px;
    border: 0px;
}

.formbox .card-header h5 {
    width: 100%;
    display: block;
    background: #21273e;
    border: 0px;
    border-radius: 0px;
    padding: 10px 0px;
}

button.btn.btn-link {
    background: transparent;
    border: 0;
    border-radius: 0px;
}

.formbox .card-body {
    background: #272e48 !important;
    box-shadow: none;
    border: 0px;
}
button.btn.btn-link {
    display: block;
    width: 100%;
    text-align: left;
}

button.btn.btn-link:hover {
    box-shadow: none;
}
</style>

<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	<div class="container-full">
		<section class="content">	

        <div class="row">
        <div class="col-lg-12 col-sm-10 col-md-12 col-xs-12 ">
					<div class="box">
						<div class="media-list media-list-divided media-list-hover">
							<div class="media align-items-center">
									<a class="avatar avatar-lg status-success" href="#">
										<img src="<?php echo (($details[0]['usermeta_staff_booking']['profile_image'])!= NULL) ? url($details[0]['usermeta_staff_booking']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;">
										
									</a>
								<div class="media-body">
									<p>
									<a href="#"><strong><h4><?php echo e($details[0]['user_staff_booking']['name']); ?></h4></strong></a>
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
									<span>+<?php echo e($details[0]['usermeta_staff_booking']['phone_no']); ?></span> </p>
									<p><i class="ti-email"></i> 
									<span><?php echo e($details[0]['user_staff_booking']['email']); ?></span>
									</p>
										
								</div>
							</div>
						</div>	
					</div>
			</div>    
        </div>
        <section class="content">
		
        <!-- Step wizard -->
         <div class="box box-default">
           <div class="box-header with-border">
             <h4 class="box-title">view staff notification</h4>
           </div>
           <!-- /.box-header -->
<div class="col-lg-8 col-sm-10 col-md-12 col-xs-12 offset-lg-2 offset-md-2 offset-lg-1">
   
   <form name="abc" action="#" method="post">
   <div class="formbox">

<div class="accordion" id="exampleAccordion">

<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

   <div class="card">
     <div class="card-header" id="exItem2Header">
       <h5 class="mb-0">
         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mycode<?php echo e($record['id']); ?>" aria-expanded="false" aria-controls="mycode<?php echo e($record['id']); ?>"><?php echo e($record['user_data']['name']); ?></button>
       </h5>
     </div>
     <div id="mycode<?php echo e($record['id']); ?>" class="collapse" aria-labelledby="exItem2Header" data-parent="#exampleAccordion">
         <div class="profileinfo">
                   <div class="profilepic">
                   <img src="<?php echo (($record['usermeta_data']['profile_image'])!= NULL) ? url($record['usermeta_data']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt=""/>	
                  </div>	
                  <div class="profile-details">
                      <ul>
                          <li>Name: <span><?php echo e($record['user_data']['name']); ?> </span></li>
                          <li>Last Name: <span><?php echo e($record['user_data']['last_name']); ?></span></li>
                          <li>Age: <span><?php echo e($record['usermeta_data']['age']); ?></span></li>
                          <li>Illness: <span><?php echo e($record['disease_list']['disease']); ?></span></li>
                          <li>Description:<span> <?php echo e($record['description']); ?></span></li>
                          <li>Duration:<span> <?php echo e($record['description']); ?></span></li>
                          <li>Picture:<span> <img src="<?php echo (($record['picture'])!= NULL) ? url($record['picture']) : url(asset('assets/img/avatars/user.png')); ?>"/> </span></li>

                      </ul>	
                  </div>
              </div>

              <div class="box-body">
                               <div class="form-group">
                                 <label>Message</label>
                                 <textarea rows="5" class="form-control" placeholder=" Add message"></textarea>
                               </div>
                              
                           </div>

   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     </div>
    </div>
   </form>
</div>
         </div>
         <!-- /.box -->
       </section>
   
        </section>

		
     </div>   
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/health_staff/staff_details.blade.php ENDPATH**/ ?>