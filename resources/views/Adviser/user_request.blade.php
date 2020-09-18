@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User Request</h3>
				</div>
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
		<h4>{{(count($value)==0)?"No Request Found":''}}</h4>
		@foreach ($value as $r_user)

			<div class="row">
                <div class="col-md-6 col-12">
                <form role="form" method="post" action="{{route('accept_userreq')}}">
                  @csrf
					<div class="media bg-primary mb-20">
					  <span class="avatar status-success">
					  <img src="<?php echo (($r_user['single']['profile_image'])!= NULL) ? url($r_user['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">

					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="{{$r_user->id}}" name="id">
						<p><strong>{{$r_user->name}}</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>{{$r_user->email}}</p>
						<p>{{$r_user->phone_no}}</p>

						<div class="d-inline-block pull-right mt-10">
						  <button type="submit" class="btn btn-rounded btn-sm btn-success m-5">Add User</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Cancle</button>
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
