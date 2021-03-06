<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">List</h3>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">

			<div class="box-header with-border">
				<h4 class="box-title"></h4>
				<div class="box-controls pull-right">
					<div class="lookup lookup-circle lookup-right">
						<input type="text" name="s">
					</div>
				</div>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
				<table class="table">
			<thead>
				<tr>
						<th scope="col"><div class="icheck-material-primary">
						<input type="checkbox" id="primary2" >
						<label for="primary2"></label>
						</div></th>
						<th scope="col">Product</th>
						<th scope="col">Product Name</th>
						<th scope="col">Category</th> 
						<th scope="col">price</th>                                  
						<th scope="col">Action</th>
				</tr>
				</thead>
                    <tbody style="height:50%">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
								<td scope="row"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div>
								</td>
								<td>
                                <img src="<?php echo (($record['images'])!= NULL) ? url($record['images']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">

											</td>
								<td><a href="#"><?php echo e($record['product_name']); ?> </a></td>
                                <td><?php echo e($record['category']); ?></td>
                                <td><?php echo e($record['price']); ?></td>
								<td>    
                                <a class="btn btn-success waves-effect waves-light" href="<?php echo e(route('edit_product',['id'=>$record['id']])); ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger waves-effect waves-light" href="<?php echo e(route('delete_product',['id'=>$record->id])); ?>"><i class="fa fa-trash"></i></a></td>
							</tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                            </tbody>
                        </table>
                   		</div>
						</div>		

						</div>
				</div>
			</div>	
		</section>
	</div>
</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/food/view_product.blade.php ENDPATH**/ ?>