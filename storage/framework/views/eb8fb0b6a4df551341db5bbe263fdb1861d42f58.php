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

		<div class="col-md-10 col-12">
			<div class="box box-default">
			<div class="box-header with-border">
			<h4 class="box-title">Configure Your Mails Setting.</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs customtab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sending" role="tab"> <span class="hidden-xs-down">Outbound Mail Settings</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#receiving" role="tab"></i> <span class="hidden-xs-down">Inbound Mail Settings</span></a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="sending" role="tabpanel">
					<form action="<?php echo e(route('saveoutboundmailsetting')); ?>" method="post">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('post')); ?>


					<div class="box-body">
						<div class="form-group">
							<label>Vendor:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="SMTP" name="vendor" value="<?php echo e(old('vendor',$outboundsettings->vendor)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="SMTP" name="vendor" value="">
							<?php endif; ?>
							<?php if($errors->has('vendor')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('vendor')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Host:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="Host" name="host" value="<?php echo e(old('host',$outboundsettings->host)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Host" name="host" value="">
							<?php endif; ?>
							<?php if($errors->has('host')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('host')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Username:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo e(old('username',$outboundsettings->username)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="">
							<?php endif; ?>
							<?php if($errors->has('username')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('username')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Password:</label>			
							<?php if(!is_null($inboundsettings)): ?>				
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo e(old('password',$outboundsettings->password)); ?>">
							<?php else: ?>
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
							<?php endif; ?>
							<?php if($errors->has('password')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('password')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Port</label>						
							<?php if(!is_null($inboundsettings)): ?>	
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="<?php echo e(old('port',$outboundsettings->port)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="">
							<?php endif; ?>
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
								<?php if(!is_null($inboundsettings)): ?>
								<option value="ssl" <?php echo e($outboundsettings->encryption == 'ssl' ? 'selected="selected"' : ''); ?>>SSL</option>
								<option value="tls" <?php echo e($outboundsettings->encryption == 'tls' ? 'selected="selected"' : ''); ?>>TLS</option>
								<?php else: ?>
								<option value="ssl">SSL</option>
								<option value="tls">TLS</option>
								<?php endif; ?>
								<option value="none">None</option>
							</select>
							<?php if($errors->has('encryption')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('encryption')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Velidate Cert:</label>
							<select class="form-control" id="validate_cert" name="validate_cert">
								<?php if(!is_null($inboundsettings)): ?>
								<option value="true" <?php echo e($outboundsettings->validate_cert == 'true' ? 'selected="selected"' : ''); ?>>TRUE</option>
								<option value="false" <?php echo e($outboundsettings->validate_cert == 'false' ? 'selected="selected"' : ''); ?>>FALSE</option>
								<?php else: ?>
								<option value="true">TRUE</option>
								<option value="false">FALSE</option>
								<?php endif; ?>
							</select>
							<?php if($errors->has('validate_cert')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('validate_cert')); ?></strong>
								</span>
							<?php endif; ?>
						</div>

					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit Outbound Setting</button>
					</div>
				</form>
			</div>

			<div class="tab-pane" id="receiving" role="tabpanel">
					<form action="<?php echo e(route('saveinboundmailsetting')); ?>" method="post">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('post')); ?>


					<div class="box-body">
						<div class="form-group">
							<label>Vendor:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="IMAP" name="vendor" value="<?php echo e(old('vendor',$inboundsettings->vendor)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="IMAP" name="vendor" value="">
							<?php endif; ?>
							<?php if(!is_null($errors) && $errors->has('vendor')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('vendor')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Host:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="Host" name="host" value="<?php echo e(old('host',$inboundsettings->host)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Host" name="host" value="">
							<?php endif; ?>
							<?php if($errors->has('host')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('host')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Username:</label>
							<?php if(!is_null($inboundsettings)): ?>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo e(old('username',$inboundsettings->username)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="">
							<?php endif; ?>
							<?php if($errors->has('username')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('username')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Password:</label>		
							<?php if(!is_null($inboundsettings)): ?>					
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo e(old('password',$inboundsettings->password)); ?>">
							<?php else: ?>
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
							<?php endif; ?>
							<?php if($errors->has('password')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('password')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Port</label>			
							<?php if(!is_null($inboundsettings)): ?>				
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="<?php echo e(old('port',$inboundsettings->port)); ?>">
							<?php else: ?>
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="">
							<?php endif; ?>
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
								<?php if(!is_null($inboundsettings)): ?>
								<option value="ssl" <?php echo e($inboundsettings->encryption == 'ssl' ? 'selected="selected"' : ''); ?>>SSL</option>
								<option value="tls" <?php echo e($inboundsettings->encryption == 'tls' ? 'selected="selected"' : ''); ?>>TLS</option>
								<?php else: ?>
								<option value="ssl">SSL</option>
								<option value="tls">TLS</option>
								<?php endif; ?>
								<option value="none">None</option>
							</select>
							<?php if($errors->has('encryption')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('encryption')); ?></strong>
								</span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Velidate Cert:</label>
							<select class="form-control" id="validate_cert" name="validate_cert">
							<?php if(!is_null($inboundsettings)): ?>
								<option value="true" <?php echo e($inboundsettings->validate_cert == 'true' ? 'selected="selected"' : ''); ?>>TRUE</option>
								<option value="false" <?php echo e($inboundsettings->validate_cert == 'false' ? 'selected="selected"' : ''); ?>>FALSE</option>
								<?php else: ?>
								<option value="true">TRUE</option>
								<option value="false">FALSE</option>
								<?php endif; ?>
							</select>
							<?php if($errors->has('validate_cert')): ?>
								<span class="help-block alert-danger">
									<strong><?php echo e($errors->first('validate_cert')); ?></strong>
								</span>
							<?php endif; ?>
						</div>

					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit Inbound Setting</button>
					</div>
				</form>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
					
    </div> 
</div>    
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/mail/setting.blade.php ENDPATH**/ ?>