<?php $__env->startSection('food_content'); ?>
<div class="page-wrapper">

            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="<?php echo e(asset('assets/images/food_image/b1.jpg')); ?>">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><span class="primary-color"><strong>124</strong></span> Results so far </div>
                        </p>
                        <div class="col-sm-9">
                            <select class="custom-select pull-right">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    
                                 <form   role="form"  method="get" action="<?php echo e(route('search_establishments')); ?>">
                                 <div class="input-group">
                                        <input type="text"  class="form-control search-field" id="myInput" placeholder="Search your favorite food"> 
                                        <span class="input-group-btn"> 
                                        <button class="btn btn-secondary search-btn" type="submit"><i class="fa fa-search"></i></button> 
                                         </span> 
                                 </div>
                                    <ul id="myUL">

                                            <?php $__currentLoopData = $establishment_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cusine_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" value="<?php echo e($cusine_data['name']); ?>"> 
                                                    <span class="custom-control-indicator"></span> 
                                                    <span class="custom-control-description"><?php echo e($cusine_data['name']); ?></a></span> 
                                                    </label>
                                            </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>

                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- end:Sidebar nav -->
                                <div class="widget-delivery">
                                    <form>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Price range
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <div class="range-slider m-b-10"> <span id="ex2CurrentSliderValLabel"> Filter by price:<span id="ex2SliderVal"><strong>35</strong></span>€</span>
                                        <br>
                                        <input id="ex2" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="35" /> </div>
                                </div>
                            </div>
                            <!-- end:Pricing widget -->
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">
                                    Pizza
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Fish 
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Desert
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Salad
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
                                    <input type="hidden" name="rest_id" value="<?php echo e($value['id']); ?>">

                                    <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
   
                                        <div class="entry-logo">
                                            <a class="img-fluid" href="#">

                                                <img src="<?php echo e($value['featured_image']); ?>" alt="Food logo"></a>
                                        </div>
                                        <!-- end:Logo -->
                                        <div class="entry-dscr">
                                            <h5><a href="<?php echo e($value['menu_url']); ?>"><?php echo e($value['name']); ?></a></h5> 
                                            <span><?php echo e($value['cuisines']); ?> <a href="#">...</a></span></br>
                                            <span><?php echo e($value['location']['city']); ?> <a href="#">...</a></span>
                                            <input type="text" id="city" name="city" value="<?php echo e($value['location']['city_id']); ?>"> 

                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-check"></i> <?php echo e($value['timings']); ?></li>
                                                <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                            </ul>
                                        </div>
                                        <!-- end:Entry description -->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                        <div class="right-content bg-white">
                                            <div class="right-review">
                                                <div class="rating-block" > <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <p> <?php echo e($value['all_reviews_count']); ?> Reviews</p> 
                                                <a href="<?php echo e(route('view_restaurant',['id'=>$value['id']])); ?>" class="btn theme-btn-dash">View Menu</a> </div>
                                        </div>
                                        <!-- end:right info -->
                                    </div>
                                </div>
                                <!--end:row -->
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- end:Restaurant entry -->
                          </div>
                    </div>
                </div>
            </section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts-footer'); ?>  
 <script>
 $('#myInput').keyup(function(){
    let c=$(this).val();    
    console.log(c);
    var x = document.getElementById("city").value;
    console.log(x);

    $.ajax({
             url:'/location',
              type:'get',
              data: { 
                location:c
                },
              success:function(value){
              
                console.log();

            }
         })
   })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.food_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/food/food_template/restaurant.blade.php ENDPATH**/ ?>