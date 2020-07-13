@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<div class="col-lg-10 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Setting</h4>
						</div>
						<!-- /.box-header -->
						<form>
							<div class="box-body">
								<div class="form-group">
									<label>Host:</label>
									<input type="text" class="form-control" placeholder="Host">
								</div>
								<div class="form-group">
									<label>Username:</label>
									<input type="text" class="form-control" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label>Password:</label>							
									<input type="password" class="form-control" placeholder="Enter Password">
								</div>
								<div class="form-group">
									<label>Port</label>							
									<input type="text" class="form-control" placeholder="Enter Port">
								</div>
								<div class="form-group">
									<label>Encryption:</label>
                                    <select class="form-control" id="encryption">
                                            <option value="">Select Encryption</option>
                                            <option value="1">SSL</option>
                                            <option value="2">TLS</option>
                                            <option value="3">None</option>
                                        </select>
                                								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
    </div>    
</div>    
@endsection('content') 
