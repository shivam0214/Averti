@extends('main.header')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
	
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Calendar</h4>
		    	   </div>
     </div>
    <!-- End Breadcrumb-->
  
            <div id='calendar'></div>
			
			<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
 </div> 

@endsection
@extends('main.footer')
