<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<?php if(Session::has('msg')): ?>
		<div class="alert alert-success">
			<?php echo e(Session::get('msg')); ?>

			<?php
				Session::forget('msg');
			?>
		</div>
		<?php endif; ?>

		<div class="col-lg-10 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Setting</h4>
						</div>
						<!-- /.box-header -->
						<form action="<?php echo e(route('savemailsetting')); ?>" method="post">
							<?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('post')); ?>


							<div class="box-body">
								<div class="form-group">
									<label>Vendor:</label>
									<input type="text" class="form-control" placeholder="SMTP" name="vendor" value="<?php echo e(old('vendor',$settings->vendor)); ?>">
									<?php if($errors->has('vendor')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('vendor')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Host:</label>
									<input type="text" class="form-control" placeholder="Host" name="host" value="<?php echo e(old('host',$settings->host)); ?>">
									<?php if($errors->has('host')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('host')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Username:</label>
									<input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo e(old('username',$settings->username)); ?>">
									<?php if($errors->has('username')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('username')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Password:</label>							
									<input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo e(old('password',$settings->password)); ?>">
									<?php if($errors->has('password')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('password')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Port</label>							
									<input type="text" class="form-control" placeholder="Enter Port" name="port" value="<?php echo e(old('port',$settings->port)); ?>">
									<?php if($errors->has('port')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('port')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Encryption:</label>
                                    <select class="form-control" id="encryption" name="encryption">
										<option value="">Select Encryption</option>
										<option value="ssl" <?php echo e($settings->encryption == 'ssl' ? 'selected="selected"' : ''); ?>>SSL</option>
										<option value="tls" <?php echo e($settings->encryption == 'tls' ? 'selected="selected"' : ''); ?>>TLS</option>
										<option value="none">None</option>
									</select>
									<?php if($errors->has('encryption')): ?>
										<span class="help-block alert-danger">
											<strong><?php echo e($errors->first('encryption')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
    </div>    
</div>    
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/mail/setting.blade.php ENDPATH**/ ?>