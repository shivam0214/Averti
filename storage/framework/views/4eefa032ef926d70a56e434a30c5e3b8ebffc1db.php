<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-2 col-lg-4 col-12">
				  <button class="btn btn-danger btn-block mb-30" type="button" alt="default" data-toggle="modal" data-target=".bs-example-modal-lg">Compose</button>

				  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Compose New Message</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<form method="POST" action="<?php echo e(route('mailer.store')); ?>" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<div class="modal-body">
					
								<div class="form-group">
									<select class="form-control" placeholder="Group:" name="group" onChange="getgroup(this.value)">
									<option value="0">Select Group</option>
									<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($record['id']); ?>"><?php echo e($record['group_name']); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</select>
								  </div>

								<div class="form-group">
									<input class="form-control" placeholder="To:" name="to" id="to" >
								  </div>
								  <div class="form-group">
									<input class="form-control" placeholder="Subject:" name="subject">
								  </div>
								  <div class="form-group">
									<select class="form-control" placeholder="Template:" name="template" id="templatebody" onChange="getBody(this.value)">
									<option value="0">Select Template</option>
									<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($template->id); ?>"><?php echo e($template->title); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								  </div>

								  <div class="form-group">
										<textarea id="compose-textarea" class="form-control" style="height: 300px" name="body">
										</textarea>
								  </div>
								  <div class="form-group">
									<div class="btn btn-info btn-file">
									  <i class="fa fa-paperclip"></i> Attachment
									  <input type="file" name="attachment">
									</div>
									<p class="help-block">Max. 32MB</p>
								  </div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
									<button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Send</button>
								</div>
								<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
								<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
							</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Folders</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-slide" href="#"></a></li>	
					  </ul>
					</div>
					
					<div class="box-body no-padding mailbox-nav">
					  <ul class="nav nav-pills flex-column">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#inbox" role="tab"><i class="ion ion-ios-email-outline"></i> Inbox <span class="label label-info pull-right">
						<?php if(isset($countMails[1]) && $countMails[1]->labels=='inbox'): ?>
						<?php echo e($countMails[1]->total); ?>

						<?php else: ?>
						0
						<?php endif; ?>
						</span></a></li>

						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sentbox" role="tab"><i class="ion ion-paper-airplane"></i> Sent <span class="label label-success pull-right">
						<?php if(isset($countMails[0]) && $countMails[0]->labels=='sent'): ?>
						<?php echo e($countMails[0]->total); ?>

						<?php else: ?>
						0
						<?php endif; ?>
						</span></a></li>
						
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#drafts" role="tab"><i class="ion ion-email-unread"></i> Drafts <span class="label label-primary pull-right"><?php echo e($draft); ?></span></a></li>

						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#starred" role="tab"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right" id="starredcount">
							<?php echo e($starred); ?>

						</span></a>
						</li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#trash" role="tab"><i class="ion ion-trash-a"></i> Trash <span class="label label-danger pull-right" id="trashcount">
						<?php if(isset($countMails[2]) && $countMails[2]->labels=='trash'): ?>
						<?php echo e($countMails[2]->total); ?>

						<?php else: ?>
						0
						<?php endif; ?>
						</span></a></li>						
					  </ul>
					</div>
					<!-- /.box-body -->
				  </div>
				  
				  <!-- /. box -->
				  <div class="contact-bx">
				  	<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $records): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="media-list media-list-hover">
							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-success" href="#">
							  <img src="<?php echo (($records['single']['profile_image'])!= NULL) ? url($records['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#"><?php echo e($records['name']); ?></a>
								</p>
							  </div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
					</div>
			
				</div>
				
				<!-- /.col -->
				<div class="col-xl-6 col-lg-8 col-12">
					<span id="syncInboxResponse"></span>
					<div class="tab-content">
					<div class="tab-pane active" id="inbox" role="tabpanel">
							<div class="box">

								<div class="box-header with-border">
								<h4 class="box-title">Inbox</h4>
									<div class="box-controls pull-right">
									<div class="box-header-actions">
									<!-- <div class="lookup lookup-sm lookup-right d-none d-lg-block">
										<input type="text" name="s" placeholder="Search">
									</div> -->
									</div>
								</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">

								<div class="mailbox-controls">
									<!-- Check all button -->
									<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
									</button>
									<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
									</div>
									<!-- /.btn-group -->
									<button type="button" class="btn btn-primary btn-sm" onClick="syncInbox()"><i class="fa fa-refresh"></i></button>
									<div class="pull-right">
									<div class="btn-group">
										
									</div>
									<!-- /.btn-group -->
									</div>
									<!-- /.pull-right -->
								</div>
								<div class="mailbox-messages inbox-bx">
									<div class="table-responsive">
										<table class="table table-hover table-striped">
										<tbody>
										<?php $__currentLoopData = $inboxlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inbox): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><input type="checkbox" class="checkbox_mail" name="check[]" value="<?php echo e($inbox->id); ?>"></td>
											<td class="mailbox-star" id="starred<?php echo e($inbox->id); ?>">
												<?php if($inbox->is_starred=='0'): ?>
													<a onClick="starred(<?php echo e($inbox->id); ?>,1)"><i class="fa text-yellow fa-star-o"></i></a>
												<?php else: ?>
													<a onClick="starred(<?php echo e($inbox->id); ?>,0)"><i class="fa text-yellow fa-star"></i></a>
												<?php endif; ?>
											</td>
											<td>
												<p class="mailbox-name mb-0 font-size-16 font-weight-600"><?php echo e($inbox->fullname); ?></p>
												<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage(<?php echo e($inbox->id); ?>)">
													<?php echo e($inbox->subject); ?>

												</a>
											</td>
											<td class="mailbox-attachment">
											<?php if($inbox->is_attachment=='1'): ?>
												<i class="fa fa-paperclip"></i>
											<?php endif; ?>
											</td>
											<td class="mailbox-date"><?php echo e($inbox->created_at->diffForHumans()); ?></td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
										</table>
									</div>                
									<!-- /.table -->
								</div>
								<!-- /.mail-box-messages -->
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
								<div class="mailbox-controls">
									<div class="pull-right">
									<div class="btn-group">
									<?php echo e($inboxlist->links()); ?>

									</div>
									<!-- /.btn-group -->
									</div>
									<!-- /.pull-right -->
								</div>
								</div>
								</div>
								<!-- /. box -->

							</div>
<!-- SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX SENTBOX -->							
							<div class="tab-pane" id="sentbox" role="tabpanel">
							<div class="box">

									<div class="box-header with-border">
									<h4 class="box-title">Sentbox</h4>
										<div class="box-controls pull-right">
										<div class="box-header-actions">
										<!-- <div class="lookup lookup-sm lookup-right d-none d-lg-block">
											<input type="text" name="s" placeholder="Search">
										</div> -->
										</div>
									</div>
									</div>
									<!-- /.box-header -->
									<div class="box-body">

									<div class="mailbox-controls">
										<!-- Check all button -->
										<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
										</button>
										<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
										</div>
										<!-- /.btn-group -->
									</div>
									<div class="mailbox-messages inbox-bx">
										<div class="table-responsive">
											<table class="table table-hover table-striped">
											<tbody>
												<?php $__currentLoopData = $sentlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><input type="checkbox" class="checkbox_mail" name="check[]" value="<?php echo e($sent->id); ?>"></td>
													<td class="mailbox-star" id="starred<?php echo e($sent->id); ?>">
														<?php if($sent->is_starred=='0'): ?>
															<a onClick="starred(<?php echo e($sent->id); ?>,1)"><i class="fa text-yellow fa-star-o"></i></a>
														<?php else: ?>
															<a onClick="starred(<?php echo e($sent->id); ?>,0)"><i class="fa text-yellow fa-star"></i></a>
														<?php endif; ?>
													</td>
													<td>
														<p class="mailbox-name mb-0 font-size-16 font-weight-600"><?php echo e($sent->fullname); ?></p>
														<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage(<?php echo e($sent->id); ?>)">
															<?php echo e($sent->subject); ?>

														</a>
													</td>
													<td class="mailbox-attachment">
													<?php if($sent->is_attachment=='1'): ?>
														<i class="fa fa-paperclip"></i>
													<?php endif; ?>
													</td>
													<td class="mailbox-date"><?php echo e($sent->created_at->diffForHumans()); ?></td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
											</table>
										</div>                
										<!-- /.table -->
									</div>
									<!-- /.mail-box-messages -->
									</div>
									<!-- /.box-body -->
									<div class="box-footer">
									<div class="mailbox-controls">
										<div class="pull-right">
											<div class="btn-group">
												<?php echo e($sentlist->links()); ?>

											</div>
										<!-- /.btn-group -->
										</div>
										<!-- /.pull-right -->
									</div>
									</div>
									</div>
									<!-- /. box -->
							</div>
<!-- DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT DRAFT -->
							<div class="tab-pane" id="drafts" role="tabpanel">
							<div class="box">

								<div class="box-header with-border">
								<h4 class="box-title">Drafts</h4>
									<div class="box-controls pull-right">
									<div class="box-header-actions">
									</div>
								</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">

								<div class="mailbox-controls">
									<!-- Check all button -->
									<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
									</button>
									<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
									</div>
									<!-- /.btn-group -->
									<!-- /.pull-right -->
								</div>
								<div class="mailbox-messages inbox-bx">
									<div class="table-responsive">
										<table class="table table-hover table-striped">
										<tbody>
												<?php $__currentLoopData = $draftlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><input type="checkbox" class="checkbox_mail" name="check[]" value="<?php echo e($draft->id); ?>"></td>
													<td class="mailbox-star" id="starred<?php echo e($draft->id); ?>">
														<?php if($draft->is_starred=='0'): ?>
															<a onClick="starred(<?php echo e($draft->id); ?>,1)"><i class="fa text-yellow fa-star-o"></i></a>
														<?php else: ?>
															<a onClick="starred(<?php echo e($draft->id); ?>,0)"><i class="fa text-yellow fa-star"></i></a>
														<?php endif; ?>
													</td>
													<td>
														<p class="mailbox-name mb-0 font-size-16 font-weight-600"><?php echo e($draft->fullname); ?></p>
														<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage(<?php echo e($draft->id); ?>)">
															<?php echo e($draft->subject); ?>

														</a>
													</td>
													<td class="mailbox-attachment">
													<?php if($draft->is_attachment=='1'): ?>
														<i class="fa fa-paperclip"></i>
													<?php endif; ?>
													</td>
													<td class="mailbox-date"><?php echo e($draft->created_at->diffForHumans()); ?></td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
										</table>
									</div>                
									<!-- /.table -->
								</div>
								<!-- /.mail-box-messages -->
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
								<div class="mailbox-controls">
									<div class="pull-right">
									<div class="btn-group">
									<?php echo e($draftlist->links()); ?>

									</div>
									<!-- /.btn-group -->
									</div>
									<!-- /.pull-right -->
								</div>
								</div>
								</div>
								<!-- /. box -->

								</div>
<!-- STARRED	STARRED STARRED STARRED STARRED STARRED STARRED STARRED STARRED STARRED STARRED STARRED -->								
							<div class="tab-pane" id="starred" role="tabpanel">
							<div class="box">

								<div class="box-header with-border">
								<h4 class="box-title">Starred Message</h4>
									<div class="box-controls pull-right">
									<div class="box-header-actions">
									<!-- <div class="lookup lookup-sm lookup-right d-none d-lg-block">
										<input type="text" name="s" placeholder="Search">
									</div> -->
									</div>
								</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">

								<div class="mailbox-controls">
									<!-- Check all button -->
									<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
									</button>
									<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
									</div>
								</div>
								<div class="mailbox-messages inbox-bx">
									<div class="table-responsive">
										<table class="table table-hover table-striped">
										<tbody>
												<?php $__currentLoopData = $starredlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $star): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><input type="checkbox" class="checkbox_mail" name="check[]" value="<?php echo e($star->id); ?>"></td>
													<td class="mailbox-star" id="starred<?php echo e($star->id); ?>">
														<?php if($star->is_starred=='0'): ?>
															<a onClick="starred(<?php echo e($star->id); ?>,1)"><i class="fa text-yellow fa-star-o"></i></a>
														<?php else: ?>
															<a onClick="starred(<?php echo e($star->id); ?>,0)"><i class="fa text-yellow fa-star"></i></a>
														<?php endif; ?>
													</td>
													<td>
														<p class="mailbox-name mb-0 font-size-16 font-weight-600"><?php echo e($star->fullname); ?></p>
														<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage(<?php echo e($star->id); ?>)">
															<?php echo e($star->subject); ?>

														</a>
													</td>
													<td class="mailbox-attachment">
													<?php if($star->is_attachment=='1'): ?>
														<i class="fa fa-paperclip"></i>
													<?php endif; ?>
													</td>
													<td class="mailbox-date"><?php echo e($star->created_at->diffForHumans()); ?></td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
										</table>
									</div>                
									<!-- /.table -->
								</div>
								<!-- /.mail-box-messages -->
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
								<div class="mailbox-controls">
									<div class="pull-right">
									<div class="btn-group">
									<?php echo e($starredlist->links()); ?>

									</div>
									<!-- /.btn-group -->
									</div>
									<!-- /.pull-right -->
								</div>
								</div>
								</div>
								<!-- /. box -->
							</div>
<!-- TRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASHTRASH -->
							<div class="tab-pane" id="trash" role="tabpanel">
							<div class="box">

							<div class="box-header with-border">
							<h4 class="box-title">Trash</h4>
								<div class="box-controls pull-right">
								<div class="box-header-actions">
								<!-- <div class="lookup lookup-sm lookup-right d-none d-lg-block">
									<input type="text" name="s" placeholder="Search">
								</div> -->
								</div>
							</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">

							<div class="mailbox-controls">
								<!-- Check all button -->
								<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
								</button>
								<!-- <div class="btn-group">
								<button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
								</div> -->
							</div>
							<div class="mailbox-messages inbox-bx">
								<div class="table-responsive">
									<table class="table table-hover table-striped">
									<tbody>
												<?php $__currentLoopData = $trashlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td class="mailbox-star" id="starred<?php echo e($trash->id); ?>">
														<?php if($trash->is_starred=='0'): ?>
															<a onClick="starred(<?php echo e($trash->id); ?>,1)"><i class="fa text-yellow fa-star-o"></i></a>
														<?php else: ?>
															<a onClick="starred(<?php echo e($trash->id); ?>,0)"><i class="fa text-yellow fa-star"></i></a>
														<?php endif; ?>
													</td>
													<td>
														<p class="mailbox-name mb-0 font-size-16 font-weight-600"><?php echo e($trash->fullname); ?></p>
														<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage(<?php echo e($trash->id); ?>)">
															<?php echo e($trash->subject); ?>

														</a>
													</td>
													<td class="mailbox-attachment">
													<?php if($trash->is_attachment=='1'): ?>
														<i class="fa fa-paperclip"></i>
													<?php endif; ?>
													</td>
													<td class="mailbox-date"><?php echo e($trash->created_at->diffForHumans()); ?></td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
									</table>
								</div>                
								<!-- /.table -->
							</div>
							<!-- /.mail-box-messages -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
							<div class="mailbox-controls">
								<div class="pull-right">
								<div class="btn-group">
								<?php echo e($trashlist->links()); ?>

								</div>
								<!-- /.btn-group -->
								</div>
								<!-- /.pull-right -->
							</div>
							</div>
							</div>
							<!-- /. box -->


							</div>
						</div>
				 </div>
				<!-- /.col -->

				<!-- Message Body content area -->
				<div class="col-xl-4 col-12">
				  <div class="box">
					<div class="box-body pt-10">
					  <div class="mailbox-read-info" id="subject">
						<h4>Your message title goes here</h4>
					  </div>
					  <div class="mailbox-read-info clearfix mb-20">
						<div class="float-left mr-10">
							<a href="#">
								<img src="<?php echo e(asset('assets/img/avatars/user.png')); ?>" alt="user" width="40" class="rounded-circle">
							</a>
						</div>
						<h5 class="no-margin" id="mails"> <!-- Pavan kumar --><br>
							<!-- <small>To: jonathan@domain.com</small> -->
							
						</h5>
					  </div>
					  <!-- /.mailbox-read-info -->
					  <div class="mailbox-controls with-border clearfix">                
						<div class="float-left">
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Print">
						  <i class="fa fa-print"></i></button>
						</div>

						<!-- <div class="float-right">
							<div class="btn-group">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
							</div>
						</div> -->
						<!-- /.btn-group -->

					  </div>
					  <!-- /.mailbox-controls -->
					  <div class="mailbox-read-message read-mail-bx" id="body">
					  <h4>Your content goes here</h4>
					  </div>
					  <!-- /.mailbox-read-message -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<h5>
							<!-- <i class="fa fa-paperclip m-r-10 m-b-10"></i>
							Attachments 
							<span>(3)</span> -->
						</h5>
						<ul class="mailbox-attachments clearfix" id="attachments">
							<!-- Attachment files list goes here from ajax -->
						</ul>
					</div>
					<!-- /.box-footer -->
					<div class="box-footer">
					  <div class="pull-right">
						<button type="button" class="btn btn-success"><i class="fa fa-reply"></i> Reply</button>
						<button type="button" class="btn btn-info"><i class="fa fa-share"></i> Forward</button>
					  </div>
					</div>
					<!-- /.box-footer -->
				  </div>
				  <!-- /. box -->
				</div>
				<!-- /.col -->
			  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
<?php $__env->stopSection(); ?>
<script>
function Delete(){
	var chkArray = [];
	$("input[name='check[]']:checked").map(function() {
		chkArray.push(this.value);
	}).get();
	var selected;
	selected = chkArray.join(',') + ",";
	if(selected.length > 1){
		$.ajax({
            type: "POST",
            url: '/trash',
            data: {mails_id: selected,"_token": "<?php echo e(csrf_token()); ?>"},
            success: function( msg ) {
                // $("#ajaxResponse").append("<div>"+msg+"</div>");
				$("#trashcount").html(msg.trash);
            }
        });
		// alert('Selecionar todos?'+selected);
	} else { alert('Remover'); }       

}

function starred(val,star){
	// alert(val+"::"+star)
	$.ajax({
		type: "POST",
		url: '/starred',
		data: {mails_id: val,is_starred:star,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( msg ) 
		{
			// alert(val+"::"+star)
			$("#starredcount").html(msg.starred);
		}
	});
}

function getMessage(val){
	$.ajax({
		type: "GET",
		url: '/getmail',
		data: {mailid: val,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( msg ) 
		{
			console.log(msg);
			$("#subject").html("<h4>"+msg.mail.subject+"</h4>");
			$("#mails").html(msg.mail.to);
			$("#mails").append("<br /><span class='mailbox-read-time'>"+msg.mail.created_at+"</span>");
			$("#body").html(msg.mail.body);
			// msg.mail.attach.forEach(ele=>{
				if(msg.mail.filename!==null && msg.mail.filename !==undefined){
					var downld = "<?php echo e(asset('')); ?>";
					var sds = downld+'storage/app/'+msg.mail.filepath+msg.mail.filename;
					// console.log(sds);
					// console.log("<?php echo e(route('downloadattachment',"+msg.mail.filename+")); ?>");
					$("#attachments").html('<li><div class="mailbox-attachment-info"><a href=\"#\" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '+msg.mail.filename+'</a></div></li>');
				}

			// })

		}
	});

}
function getBody(id){
	console.log(id)
	$.ajax({
	type: "GET",
	url: '/gettemplatebody',
	data: {templateid: id,"_token": "<?php echo e(csrf_token()); ?>"},
	success: function( data ) {
		// console.log(data);
		document.getElementById("compose-textarea").innerHTML = data.result;
	}
	});
}

function getgroup(id){
//	console.log(id);
	$.ajax({
		type: "GET",
		url: '/getmails',
		data: {group_id: id,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( data ) {
			console.log(data);
			$("#to").val(data.mail_result)
		}
	});
}

function syncInbox(){
	$('i.fa-refresh').addClass('fa-spin');
	$('#syncInboxResponse').html('<div class="alert alert-warning alert-dismissible fade show" role="alert">Inbox syncing is initiated. It may take few minutes to sync.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')
	$.ajax({
		type: "GET",
		url: '/inboundmails',
		data: {"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( data ) {
			console.log(data);
			$('i.fa-refresh').removeClass('fa-spin');
			$('#syncInboxResponse').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')

		}
	});
}
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/mail/new_mail.blade.php ENDPATH**/ ?>