@extends('layouts.food_app')
@section('food_content')
<div class="page-wrapper">
        <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="{{route('food_index')}}">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="{{route('restaurant')}}">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="{{route('view_restaurant')}}">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="{{('checkout')}}">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="http://placehold.it/1670x480">
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
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" placeholder="Search your favorite food"> <span class="input-group-btn"> 
                                 <button class="btn btn-secondary search-btn" type="button"><i class="fa fa-search"></i></button> 
                                 </span> </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Barbecuing and Grilling</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Appetizers</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Soup and salads</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Seafood</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Beverages</span> </label>
                                            </li>
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
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 15,99</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 18,49</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 21,19</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 21,19</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 21,19</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="http://placehold.it/380x210">
                                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                            <div class="product-name">Fried Chicken with cheese</div>
                                            <div class="price-btn-block"> <span class="price">$ 21,19</span> <a href="profile.html" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="#"> <img src="http://placehold.it/50x46" alt="Restaurant logo"> </a>
                                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a>
                                            </li>
                                            <li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a> </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
            </section>
        </div>    
@endsection
