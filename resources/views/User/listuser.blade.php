 @extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>
<section class="content">
		  <div class="row">
      <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Individual column searching</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>email</th>
								<th>City</th>
								<th>Age</th>
								<th>Phone</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							
              @foreach ($users as $record)
                <tr>
								<td>{{$record['name']}}</td>
								<td>{{$record['email']}}</td>
								<td>{{$record['single']['city']}}</td>
								<td>{{$record['single']['age']}}</td>
                <td>{{$record['single']['phone_no']}}</td>
								<td>
								<div class="btn-group">
								  <button type="button" class="waves-effect waves-light btn btn-info"><i class="fa fa-inbox"></i></button>
								  <button type="button" class="waves-effect waves-light btn btn-info"><i class="fa fa-pencil"></i></button>
								  <button type="button" class="waves-effect waves-light btn btn-danger"><i class="fa fa-trash-o"></i></button>
								  <button type="button" class="waves-effect waves-light btn btn-danger"><i class="fa fa-ban"></i></button>
								</div>
								</td>
							</tr>
              @endforeach
              
							
						</tbody>
						<tfoot>
							<tr>
                <th>Name</th>
								<th>email</th>
								<th>City</th>
								<th>Age</th>
								<th>Phone</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div> 
      </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

  @endsection