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
		<h4 class="box-title">About Product</h4>
	</div>
	<div class="box-body">
	<form action="<?php echo e(route('update_product')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-body">
			<div class="row">
				<input type="hidden" value="<?php echo e($products->id); ?>" name="id">
				<div class="col-md-6">
					<div class="form-group">
						<label class="font-weight-700 font-size-16">Product Name</label>
						<input type="text" class="form-control" placeholder="Product Name" value="<?php echo e($products->product_name); ?>" name="product_name">
					</div>
				</div>
				<!--/span-->
				<div class="col-md-6">
				<div class="form-group">
						<label class="font-weight-700 font-size-16">Product Type</label>
						<input type="text" class="form-control" placeholder="Veg OR Non-veg" value="<?php echo e($products->type); ?>" name="type">
					</div>
				</div>
				<!--/span-->
			</div>
			<!--/row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<label class="font-weight-700 font-size-16">Category</label>
						<input type="text" class="form-control" placeholder="Category" value="<?php echo e($products->category); ?>" name="category">
					
					</div>
				</div>
				<!--/span-->
				<div class="col-md-6">
					<div class="form-group">
					<label class="font-weight-700 font-size-16">Restaurant</label>
						<select class="form-control" data-placeholder="Choose a Restaurant" tabindex="1">
							<option value="Restaurant 1">Restaurant 1</option>
							<option value="Restaurant 2">Restaurant 2</option>
							<option value="Restaurant 3">Restaurant 5</option>
							<option value="Restaurant 4">Restaurant 4</option>
						</select>
					
					</div>
				</div>
				<!--/span-->
			</div>
			<!--/row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="font-weight-700 font-size-16">Price</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="ti-money"></i></div>
							<input type="text" class="form-control" name="price" value="<?php echo e($products->price); ?>" placeholder="270"> </div>
					</div>
				</div>
				<!--/span-->
				<div class="col-md-6">
					<div class="form-group">
						<label class="font-weight-700 font-size-16">Discount</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="ti-cut"></i></div>
							<input type="text" class="form-control" name="discount" value="<?php echo e($products->discount); ?>" placeholder="50%"> </div>
					</div>
				</div>
				<!--/span-->
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="font-weight-700 font-size-16">Product Description</label>
						<textarea class="form-control p-20" rows="4" value="<?php echo e($products->description); ?>" name="description"> <?php echo e($products->description); ?> </textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="font-weight-700 font-size-16">Preparation Time</label>
						<input type="text" class="form-control" placeholder="00:00:00" value="<?php echo e($products->time); ?>" name="preparation_time">
					</div>
				</div>
				
				<div class="col-md-3" id="food_parent">
					<label class="font-weight-700 font-size-16">Upload Image</label>
						<div class="product-img text-left" id="food_image">
							<span class="input-group-btn" >
								<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
								<i class="fa fa-picture-o"></i> Choose Food Image
								</a>							
							</span>
							<input id="thumbnail" class="form-control" type="text" name="images" value="<?php echo e($products->images); ?>" name="filepath">
						</div>
						<div class="col-md-12">
							<div id="holder" style="margin-top:15px;max-height:100px;"></div>
						</div>
						<button type="button" id="clone_btn" class="btn btn-primary">Clone</button>

				</div>

			</div>
			
		<div class="form-actions mt-10">
			<button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
			<button type="button" class="btn btn-danger">Cancel</button>
		</div>
	</form>
	</div>
	</div>
				</div>
			</div>	
		</section>
	</div>
</div>	
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/food/edit_product.blade.php ENDPATH**/ ?>