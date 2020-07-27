@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Invitation for meeting by Advisor</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
        @foreach ($invites as $r_advisor)
			<div class="row">
                <div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar avatar-lg status-success">
                      <img src="<?php echo (($r_advisor['user']['single']['profile_image'])!= NULL) ? url($r_advisor['user']['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="{{$r_advisor->id}}" name="id">
					<h5><p><strong>{{$r_advisor['user']['name']}}</strong> </p></h5>
						<p>{{$r_advisor['user']['email']}}</p>
                        <p>Time {{date('Y-m-d',strtotime($r_advisor['mymeeting']['start_time']))}} {{date('H-i a',strtotime($r_advisor['mymeeting']['start_time']))}}</p>
						<div class="d-inline-block pull-right mt-10">
						  <a href="{{route('allmeeting',$r_advisor['mid'])}}" class="btn btn-rounded btn-sm btn-success m-5">Start</a>
						</div>
					  </div>
                    </div>
                   				
				</div>		
            </div>
            @endforeach
        </section>
    </div>
</div>
@endsection
