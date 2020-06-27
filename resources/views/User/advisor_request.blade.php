@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Advisor</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
        @foreach ($value as $r_advisor)
			<div class="row">
                <div class="col-md-6 col-12">
                <form role="form" method="post" action="{{route('advisor_request_send')}}">
                  @csrf
					<div class="media bg-white mb-20">
					  <span class="avatar avatar-lg status-success">
                      <img src="<?php echo (($r_advisor['single']['profile_image'])!= NULL) ? url($r_advisor['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="{{$r_advisor->id}}" name="id">
					<h5>	<p><strong>{{$r_advisor->name}}</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p></h5>
						<p>{{$r_advisor->email}}</p>
						<div class="d-inline-block pull-right mt-10">
						  <button type="submit" class="btn btn-rounded btn-sm btn-success m-5">Send Request</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>
						</div>
					  </div>
                    </div>
                    </form> 				
				</div>		
            </div>
            @endforeach
        </section>
    </div>
</div>
@endsection
