<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Invoice</h3>
				</div>
			</div>
		</div>  

		<!-- Main content -->
		<section class="invoice printableArea">
		  <div class="row">
			<div class="col-12">
			  <div class="bb-1 clearFix">
				<div class="text-right pb-15">
					<button class="btn btn-success" type="button"> <span><i class="fa fa-print"></i> Save</span> </button>
					<button id="print2" class="btn btn-warning" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
				</div>	
			  </div>
			</div>
			<div class="col-12">
			  <div class="page-header">
				<h2 class="d-inline"><span class="font-size-30">Invoice</span></h2>
				<div class="pull-right text-right">
					<h3>22 April 2018</h3>
				</div>	
			  </div>
			</div>
			<!-- /.col -->
		  </div>
		  <div class="row invoice-info">
			<div class="col-md-6 invoice-col">
			  <strong>From</strong>	
			  <address>
				<strong class="text-blue font-size-24">Averti Advisor</strong><br>
				<strong class="d-inline">124 Lorem Ipsum, Suite 478,  Dummuy, USA 123456</strong><br>
				<strong>Phone: (00) 123-456-7890 &nbsp;&nbsp;&nbsp;&nbsp; Email: info@averti.com</strong>  
			  </address>
			</div>
			<!-- /.col -->
			<div class="col-md-6 invoice-col text-right">
			  <strong>To</strong>
			  <address>
				<strong class="text-blue font-size-24">Doe Shina</strong><br>
				124 Lorem Ipsum, Suite 478, Dummuy, USA 123456<br>
				<strong>Phone: (00) 789-456-1230 &nbsp;&nbsp;&nbsp;&nbsp; Email: conatct@example.com</strong>
			  </address>
			</div>
			<!-- /.col -->
			<div class="col-sm-12 invoice-col mb-15">
				<div class="invoice-details row no-margin">
				  <div class="col-md-6 col-lg-3"><b>Invoice </b>#0154879</div>
				  <div class="col-md-6 col-lg-3"><b>Order ID:</b> FC12548</div>
				  <div class="col-md-6 col-lg-3"><b>Payment Due:</b> 14/08/2018</div>
				  <div class="col-md-6 col-lg-3"><b>Account:</b> 00215487541296</div>
				</div>
			</div>
		  <!-- /.col -->
		  </div>
		  <div class="row">
			<div class="col-12 table-responsive">
			  <table class="table table-bordered">
				<tbody>
				<tr>
				  <th>#</th>
				  <th>Description</th>
				  <th>Serial #</th>
				  <th class="text-right">Quantity</th>
				  <th class="text-right">Unit Cost</th>
				  <th class="text-right">Subtotal</th>
				</tr>
				<tr>
				  <td>1</td>
				  <td>Milk Powder</td>
				  <td>12345678912514</td>
				  <td class="text-right">2</td>
				  <td class="text-right">$26.00</td>
				  <td class="text-right">$52.00</td>
				</tr>
				<tr>
				  <td>2</td>
				  <td>Air Conditioner</td>
				  <td>12345678912514</td>
				  <td class="text-right">1</td>
				  <td class="text-right">$1500.00</td>
				  <td class="text-right">$1500.00</td>
				</tr>
				<tr>
				  <td>3</td>
				  <td>TV</td>
				  <td>12345678912514</td>
				  <td class="text-right">2</td>
				  <td class="text-right">$540.00</td>
				  <td class="text-right">$1080.00</td>
				</tr>
				<tr>
				  <td>4</td>
				  <td>Mobile</td>
				  <td>12345678912514</td>
				  <td class="text-right">3</td>
				  <td class="text-right">$320.00</td>
				  <td class="text-right">$960.00</td>
				</tr>
				</tbody>
			  </table>
			</div>
			<!-- /.col -->
		  </div>
		  <div class="row">
			<div class="col-12 text-right">
				<p class="lead"><b>Payment Due</b><span class="text-danger"> 14/08/2018 </span></p>

				<div>
					<p>Sub - Total amount  :  $3,592.00</p>
					<p>Tax (18%)  :  $646.56</p>
					<p>Shipping  :  $110.44</p>
				</div>
				<div class="total-payment">
					<h3><b>Total :</b> $4,349.00</h3>
				</div>

			</div>
			<!-- /.col -->
		  </div>
		  <div class="row no-print">
			<div class="col-12">
			  <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
			  </button>
			</div>
		  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/sales/invoice.blade.php ENDPATH**/ ?>