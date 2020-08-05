<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Hi </h3>
                    <p> What's the reason for you visit today?</p>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
                
					<div class="box">
						<div class="box-header with-border">
							<p class="box-title"></p>
					</div>
							<div class="box-body no-padding">
                            <div class="col-12">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
								<div class="p-15">
									<h3>Rash</h3>
									<h4>Fill Some Details</h4>
                                    <form>
                                    <div class="row">
                                    <div class="form-group">
									<label for="where">Where is the rash located on your</label>
									<input type="text" class="form-control" id="where">
								</div>
                                
                            </div>
                                <div class="row">
                                    <div class="form-group">
									<label>Are you disoriented or sturring your speech?</label>
									<div class="c-inputs-stacked">
										<input name="group1" type="radio" id="radio_1" value="1">
										<label for="radio_1" class="d-block">YES</label>
										<input name="group1" type="radio" id="radio_2" value="1">
										<label for="radio_2">NO</label>
									</div>
								    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Select all that apply its rash..</label>
                                        <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Itchy</option>
                                        <option>Very Painful</option>
                                        <option>Warm to the touch</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="form-group">
									<label>Are there red streaks associated with rash?</label>
									<div class="c-inputs-stacked">
										<input name="group1" type="radio" id="radio_1" value="1">
										<label for="radio_1" class="d-block">YES</label>
										<input name="group1" type="radio" id="radio_2" value="1">
										<label for="radio_2">NO</label>
									</div>
								    </div>
                                </div>
                                   
                                <div class="row">
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
		    					
                                </div>
                                </div>
                                    </form>
								</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>

						</div>	
					</div>
				</div>
			</div>	
		</section>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/notification/user_notification.blade.php ENDPATH**/ ?>