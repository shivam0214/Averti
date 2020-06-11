<?php $__env->startPush('header-scripts'); ?>
<link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?php echo e(asset('assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet"/>
  
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

     <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Calls <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div> 
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total User <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
     </div><!--End Row-->

	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Site Traffic
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #14abef"></i>New Visitor</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #ade2f9"></i>Old Visitor</li>
			</ul>
			<div class="chart-container-1">
		      <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">45.87M</h5>
			   <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">15:48</h5>
			   <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">245.65</h5>
			   <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Weekly User
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
              <div class="chart-container-2">
                 <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #14abef"></i> Direct</td>
                   <td>$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #02ba5a"></i>Affiliate</td>
                   <td>$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #d13adf"></i>E-mail</td>
                   <td>$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle mr-2" style="color: #fba540"></i>Other</td>
                   <td>$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
   <div class="row">
	<div class="col-12 col-lg-4 col-xl-4">
      <div class="card bg-facebook rounded-0">
        <div class="card-body">
          <h4 class="text-white mb-0">45,260 <span class="float-right"><i class="zmdi zmdi-facebook"></i></span></h4>
            <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:70%"></div>
            </div>
          <p class="mb-0 text-white small-font">Facebook Likes <span class="float-right">+70% <i class="fa fa-arrow-up"></i></span></p>
        </div>
      </div>
    </div>
 <div class="col-12 col-lg-4 col-xl-4">
      <div class="card bg-twitter rounded-0">
        <div class="card-body">
          <h4 class="text-white mb-0">85,430 <span class="float-right"><i class="zmdi zmdi-twitter"></i></span></h4>
              <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:68%"></div>
            </div>
          <p class="mb-0 text-white">Twitter Followers <span class="float-right">+65% <i class="fa fa-arrow-up"></i></span></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 col-xl-4">
      <div class="card bg-youtube rounded-0">
        <div class="card-body">
          <h4 class="text-white mb-0">95,360 <span class="float-right"><i class="zmdi zmdi-youtube"></i></span></h4>
           <div class="progress my-3" style="height:3px;">
               <div class="progress-bar" style="width:80%"></div>
            </div>
          <p class="mb-0 text-white">Youtube Subscribers <span class="float-right">+80% <i class="fa fa-arrow-up"></i></span></p>
        </div>
      </div>
    </div>
	</div><!--End Row-->


  <div class="row">
     <div class="col-12 col-lg-12 col-xl-6">
       <div class="card">
         <div class="card-header">World Selling Region
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
         <div class="card-body">
            <div id="dashboard-map" style="height: 275px;"></div>
         </div>
         <div class="table-responsive">
            <table class="table table-striped align-items-center">
               <thead>
                  <tr>
                      <th>Country</th>
                      <th>Income</th>
                      <th>Trend</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><i class="flag-icon flag-icon-ca mr-2"></i> USA</td>
                      <td>4,586$</td>
                      <td><span id="trendchart1"></span></td>
                  </tr>
                  <tr>
                      <td><i class="flag-icon flag-icon-us mr-2"></i>Canada</td>
                      <td>2,089$</td>
                      <td><span id="trendchart2"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-in mr-2"></i>India</td>
                      <td>3,039$</td>
                      <td><span id="trendchart3"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-gb mr-2"></i>UK</td>
                      <td>2,309$</td>
                      <td><span id="trendchart4"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-de mr-2"></i>Germany</td>
                      <td>7,209$</td>
                      <td><span id="trendchart5"></span></td>
                  </tr>
				  
              </tbody>
          </table>
          </div>
       </div>
     </div>
	 
	 <div class="col-12 col-lg-12 col-xl-6">
        <div class="row">
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Page Views</p>
				<h4 class="mb-0">8,293 <small class="small-font">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			   <canvas id="chart3"></canvas>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Total Clicks</p>
				<h4 class="mb-0">7,493 <small class="small-font">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			  <canvas id="chart4"></canvas>
			  </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body text-center">
				<p class="mb-4">Total Downloads</p>
				<input class="knob" data-width="175" data-height="175" data-readOnly="true" data-thickness=".2" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(0, 0, 0, 0.08)" data-fgcolor="#843cf7" data-max="15000" value="8550"/>
				<hr>
				<p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Device Storage</p>
				<h4 class="mb-3">42620/50000</h4>
				<hr>
				<div class="progress-wrapper mb-4">
				   <p>Documents <span class="float-right">12GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-success" style="width:80%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				   <p>Images <span class="float-right">10GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-danger" style="width:60%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				    <p>Mails <span class="float-right">5GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar bg-primary" style="width:40%"></div>
                   </div>
                </div>
				
			 </div>
		   </div>
		  </div>
		</div>
	 </div>
	 
  </div><!--End Row-->


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
             <p>Total Earning</p>
             <h4 class="mb-0">287,493$</h4>
             <small>1.4% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <hr>
             <p>Total Sales</p>
             <h4 class="mb-0">87,493</h4>
             <small>5.43% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <div class="mt-5">
              <div class="chart-container-4">
               <canvas id="chart5"></canvas>
			  </div>
            </div>
           </div>
        </div>

      </div>

      <div class="col-12 col-lg-6 col-xl-8">
         <div class="card">
           <div class="card-header">User Review
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="assets/img/avatars/1.jpg" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Sara Jhon : <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Sara Jhon : This is Nice Site.</p>
                </div>
                <div class="star">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="assets/img/avatars/8.jpg" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Danish Josh  <small class="ml-4">05.26 PM</small></h6>
                  <p class="mb-0 small-font">: Best Site !</p>
                </div>
                <div class="star">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="assets/img/avatars/7.jpg" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Jhon Doe <small class="ml-4">06.45 AM</small></h6>
                  <p class="mb-0 small-font"> :Best Site</p>
                </div>
                <div class="star">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="assets/img/avatars/4.jpg" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Christine <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font"> : Nice!</p>
                </div>
                <div class="star">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <img src="assets/img/avatars/5.jpg" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Michle <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font"> : Awesome!</p>
                </div>
                <div class="star">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              </li>
            </ul>
         </div>
      </div>
    </div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header border-0">Recent User Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Photo</th>
                     <th>Name</th>
                     <th>Status</th>
                     <th>Completion</th>
                     <th>Last Call Date</th>
                   </tr>
                   </thead>
           <tbody><tr>
                    <td>
                      <img alt="Image placeholder" src="assets/img/avatars/7.jpg" class="product-img">
                    </td>
                    <td>Jhone</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 60%"></div>
                       </div>
                    </td>
          <td>10 Nov 2019</td>
                   </tr>
           <tr>
                    <td>
                     <img alt="Image placeholder" src="assets/img/avatars/8.jpg" class="product-img">
                    </td>
                  <td>Clasic Shoes</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
                              <td>10 Nov 2019</td>

                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/img/avatars/7.jpg" class="product-img">
                    </td>
                    <td>Tiger Nixon</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-warning"></i> delayed
                      </span>
                    </td>

                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                       </div>
                    </td>
                              <td>10 Nov 2019</td>

                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/img/avatars/1.jpg" class="product-img">
                    </td>
                    <td>Sonya Frost</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-info"></i> on schedule
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                       </div>
                    </td>
                              <td>10 Nov 2019</td>

                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/img/avatars/2.jpg" class="product-img">
                    </td>
                    <td>Sara Jen</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
          <td>17 Nov 2019</td>
                   </tr>
           <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/img/avatars/8.jpg" class="product-img">
                    </td>
                    <td>Dannish</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
             <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 80%"></div>
                       </div>
                    </td>
          <td>18 Nov 2019</td>
                   </tr>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
<!--start overlay-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('footer-scripts'); ?>
<script src="<?php echo e(asset('assets/plugins/jquery-knob/excanvas.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/app-script.js')); ?>"></script>
  <!-- Chart js -->
  
  <script src="<?php echo e(asset('assets/plugins/Chart.js/Chart.min.js')); ?>"></script>
  <!-- Vector map JavaScript -->
  <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>


  
  <!-- Easy Pie Chart JS -->
  <script src="<?php echo e(asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
  <!-- Sparkline JS -->
  <script src="<?php echo e(asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/jquery-knob/excanvas.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/jquery-knob/jquery.knob.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
 
<?php $__env->stopPush(); ?>


<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averibackup\averti\resources\views/main/dashboard.blade.php ENDPATH**/ ?>