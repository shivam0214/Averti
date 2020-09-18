
<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Users</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                <form class="form-horizontal" role="form"  method="post" action="<?php echo e(route('group_list')); ?>">
					
				<div class="modal-body">
				<div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                <input type="hidden" name="group_users_id"  value="<?php echo e($group_users_id); ?>">
		                          <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $records): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php echo csrf_field(); ?>
                                    <div class="media align-items-center">
                                  <a class="avatar avatar-lg status-success" href="#">
								  <input type="hidden" value="<?php echo e($records->id); ?>" name="id">
                                    <img src="<?php echo (($records['single']['profile_image'])!= NULL) ? url($records['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
                                    </a>
                                    <div class="media-body">
                                        <p>
                                        <a href="#"><strong><?php echo e($records['name']); ?></strong></a>
                                        </p>
                                        <p><strong><?php echo e($records['email']); ?></strong></p>
                                    </div>
                                    <div class="media-right gap-items">
									<button type="submit" class="btn btn-success" >Add</button>
									</div>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                </div>
                            </div>			
				</div>
               </div> 
               </form>

				<div class="modal-footer">
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/mail/add_user_to_group.blade.php ENDPATH**/ ?>