<?php $__env->startSection('food_content'); ?>
<div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="<?php echo e(route('food_index')); ?>">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="<?php echo e(route('restaurant')); ?>">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="<?php echo e(route('view_restaurant')); ?>">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="<?php echo e(('checkout')); ?>">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <div class="container m-t-30">
                <div class="widget clearfix">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                                        Cart summary
                                    </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-sm-6 margin-b-30">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name*</label>
                                                <input type="text" class="form-control" placeholder="John"> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name*</label>
                                                <input type="text" class="form-control" placeholder="Doe"> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Country*</label>
                                                <select class="form-control">
                                                    <option>India</option>
                                                    <option>USA</option>
                                                    <option>UK</option>
                                                    <option>Australia</option>
                                                    <option>Japan</option>
                                                    <option>Columbia</option>
                                                    <option>Poland</option>
                                                </select>
                                            </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Lorem ipsum"> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Full Address*</label>
                                                <input type="text" class="form-control" placeholder="124, Lorem Street.."> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>City / State*</label>
                                                <input type="text" class="form-control" placeholder="Jaipur"> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Zip/ Postal Code*</label>
                                                <input type="text" class="form-control" placeholder="302012"> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address*</label>
                                                <input type="text" class="form-control" placeholder="john@doe.com"> </div>
                                            <!--/form-group-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>phone*</label>
                                                <input type="text" class="form-control" placeholder="123-345-3322"> </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td>$29.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td>$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong>$31.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                    <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-radio  m-b-10">
                                                    <input name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                            </li>
                                        </ul>
                                        <p class="text-xs-center"> <a href="#" class="btn btn-outline-success btn-block">Pay now</a> </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.food_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/food/food_template/checkout.blade.php ENDPATH**/ ?>