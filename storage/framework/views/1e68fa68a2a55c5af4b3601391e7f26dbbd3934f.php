<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">

			<div class="box-header with-border">
			  <h4 class="box-title">Edit Staff Details</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			    <div class="row">	
                    <div class="col">
                        <form  id="adduserform" method="POST" action="<?php echo e(route('update_details')); ?>">   
                            <?php echo csrf_field(); ?>
                            <div class="container">      
                            <input type="hidden" value="<?php echo e($staff_list->id); ?>" name="id">
                  
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="firstname" class="sr-only">FIRST NAME</label>
                                            <input type="text" id="firstname" name="name" class="form-control" value="<?php echo e($staff_list->name); ?>" placeholder=" First Name">
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="middle_name" class="sr-only">MIDDLE NAME</label>
                                            <input type="text" id="middle_name" name="middle_name" class="form-control" value="<?php echo e($staff_list->middle_name); ?>" placeholder=" Middle Name">
                                        </div>
                                    </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="last_name" class="sr-only">LAST NAME</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo e($staff_list->last_name); ?>" placeholder=" Last Name" >
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="email" class="sr-only">Email ID</label>
                                        <input type="text" id="email" name="email" class="form-control" value="<?php echo e($staff_list->email); ?>" placeholder="Email ID" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                        <label for="date_of_birth" class="sr-only">DOB</label>
                                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="<?php echo e($staff_list['single']['date_of_birth']); ?>" placeholder="DOB">
                                        
                                        </div>
                                    </div>
                                </div>    
                            </div>      
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                        <label for="age" class="sr-only">AGE</label>
                                        <input type="number" id="age" name="age" class="form-control" value="<?php echo e($staff_list['single']['age']); ?>" placeholder="Age" >
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="experience" class="sr-only">Experience</label>
                                            <input type="text" id="experience" name="experience" class="form-control" value="<?php echo e($staff_list['staff_details']['experience']); ?>" placeholder="Experience" required>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="specialization" class="sr-only">Specialization</label>
                                            <input type="text" id="specialization" name="specialization" class="form-control" value="<?php echo e($staff_list['staff_details']['specialization']); ?>" placeholder="Specialization">
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="designation" class="sr-only">Designation</label>
                                            <input type="text" id="designation" name="designation" class="form-control" value="<?php echo e($staff_list['staff_details']['designation']); ?>" placeholder="Designation">
                                        </div>
                                </div>                 
                                </div>
                            </div>            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="phone_no" class="sr-only">PHONE</label>
                                            <input type="text" id="phone_no" name="phone_no" class="form-control" value="<?php echo e($staff_list['single']['phone_no']); ?>" placeholder="Phone Number" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="mobile_num" class="sr-only">MOBILE</label>
                                            <input type="text" id="mob" name="mobile_num" class="form-control" value="<?php echo e($staff_list['single']['mobile_num']); ?>" placeholder="Mobile Number">
                                        </div>
                                </div>                 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="address" class="sr-only">ADDRESS</label>
                                            <input type="text" id="address" name="address" class="form-control" value="<?php echo e($staff_list['single']['address']); ?>" placeholder="Address" >
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="city" class="sr-only">City</label>
                                            <input type="text" id="city" name="city" class="form-control" value="<?php echo e($staff_list['single']['city']); ?>" placeholder="City" >
                                            
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="state" class="sr-only">STATE</label>
                                            <input type="text" id="state" name="state"  class="form-control"value="<?php echo e($staff_list['single']['state']); ?>" value="<?php echo e($staff_list['single']['mobile_num']); ?>" placeholder="State">
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="country" class="sr-only">Country</label>
                                            <input type="text" id="country" name="country"  class="form-control" value="<?php echo e($staff_list['single']['country']); ?>" placeholder="Country"  >
                                            
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="pincode" class="sr-only">PINCODE</label>
                                            <input type="text" id="pincode" name="zipcode" class="form-control" value="<?php echo e($staff_list['single']['zipcode']); ?>" placeholder="Pin Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group row">
                                <span class="input-group-btn">
								<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
									<i class="fa fa-picture-o"></i> Choose
                                    <input id="thumbnail" class="form-control" type="text" name="profile_image" value="<?php echo e($staff_list['single']['profile_image']); ?>"  name="filepath">
								</a>							
							</span>
						</div>
                                </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="disease" class="sr-only">Disease</label>
                                            <input type="text" id="disease" name="disease" class="form-control" value="" placeholder="Fever|Cough|Headache">
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <button type="submit" id="btn" class="btn btn-primary waves-effect waves-light"><b>Update</b></button>                
                        </form>
                    </div>
                    </div>
				</div>
			</div>	
		</section>
	</div>
</div>	

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('food.food_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/health_staff/edit_staff_details.blade.php ENDPATH**/ ?>