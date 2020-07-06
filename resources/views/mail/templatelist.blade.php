@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		@if(session()->has('messgae'))
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> {{ session()->get('messgae') }} 
			</div>
		@endif

		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Mail Templates</h3>
				</div>
			</div>
		</div>
		<section class="content">
		  <div class="row">
			<div class="col-12">          
			  <div class="box">
				<div class="box-body">
					<h4 class="box-title">Your Mail Templates</h4>
					<div class="table-responsive">
					<table class="table b-1 border-info">
							<thead class="bg-info">
								<tr>
									<th>#</th>
									<th>Templates Title</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($templates as $k=>$val)
								<tr>
									<td>{{++$k}}</td>
									<td>{{$val->title}}</td>
									<td ><a href="{{route('templateedit',['templateid'=>$val->id])}}" class="btn btn-circle btn-success btn-xs mr-10" data-toggle="tooltip" data-original-title="Edit">
										<i class="ti-marker-alt"></i>
									</a><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
								</tr>
							@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>
			 
			  <!-- /.box -->

			</div>
			<!-- /.col-->
		  </div>
		  <!-- ./row -->
		</section>


	  </div>
  </div>
  
@endsection('content')