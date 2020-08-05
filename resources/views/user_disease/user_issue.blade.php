@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
                	<div class="box">
						<div class="box-header with-border">
						<h3 class="page-title">Hi </h3>
                    <p> What's the reason for you visit today?</p>
									</div>
							<div class="box-body no-padding">
                            <div class="col-12">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
							<form method="POST" action="{{route('staff_booking')}}" >
							@csrf

                                 <div class="row">
								 	<div class="col-md-5">
								 		<div class="form-group">
											<label>Select disease..</label>
											<select class="form-control select2" style="width: 100%;" name="disease_id" onChange="getstaff(this.value)">
											@foreach ($data as $record)
											<option value="{{$record['id']}}">{{$record['disease']}}</option>
											@endforeach
											</select>
                                    	</div>
                                	</div> 
									<div class="col-md-5">
								 		<div class="form-group">
											<label>Doctor</label>
											<input type="text" class="form-control" id="staff_name" name="staff_name">
                                    	</div>
                                	</div> 
								</div>	
                                <div class="row">
									<div class="col-md-5">
										<div class="form-group">
										<label for="where">Description</label>
										<input type="textarea" class="form-control" id="description" name="description" >
										</div>
                            		</div>
									<div class="col-md-5">
                                		<div class="form-group">
											<span class="input-group-btn">
											<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
												<i class="fa fa-picture-o"></i> Upload Picture
											</a>							
											<input id="thumbnail" class="form-control" type="text" name="profile_image"  name="filepath">
											</span>
						    			</div>
									</div>	
                                </div>   
                                <div class="row">
									<div class="form-group">
									<button type="submit" class="btn btn-primary float-right">Submit</button>	
									</div>
                                </div>
                            </form>
								</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
						</div>	
					</div>
				</div>
			</div>	
		</section>
	</div>
</div>
@endsection
<script>
function getstaff(id){
//	console.log(id);
	$.ajax({
		type: "GET",
		url: '/getstaff_name',
		data: {disease_id: id,"_token": "{{ csrf_token() }}"},
		success: function( data ) {
			console.log(data);
		//	document.getElementById("to").innerHTML = data.mail_result;
			$("#staff_name").val(data.result)
		}
	});
}

</script>