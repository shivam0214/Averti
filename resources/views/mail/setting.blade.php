@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{ Session::get('msg') }}
			@php
				Session::forget('msg');
			@endphp
		</div>
		@endif

		<div class="col-md-10 col-12">
			<div class="box box-default">
			<div class="box-header with-border">
			<h4 class="box-title">Setting</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs customtab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sending" role="tab"> <span class="hidden-xs-down">Outbound Mail Settings</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#receiving" role="tab"></i> <span class="hidden-xs-down">Inbound Mail Settings</span></a> </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="sending" role="tabpanel">
					<form action="{{ route('savemailsetting') }}" method="post">
					{{ csrf_field() }}
					{{ method_field('post') }}

					<div class="box-body">
						<div class="form-group">
							<label>Vendor:</label>
							<input type="text" class="form-control" placeholder="SMTP" name="vendor" value="{{old('vendor',$settings->vendor)}}">
							@if ($errors->has('vendor'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('vendor') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Host:</label>
							<input type="text" class="form-control" placeholder="Host" name="host" value="{{old('host',$settings->host)}}">
							@if ($errors->has('host'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('host') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="{{old('username',$settings->username)}}">
							@if ($errors->has('username'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('username') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Password:</label>							
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password',$settings->password)}}">
							@if ($errors->has('password'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Port</label>							
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="{{old('port',$settings->port)}}">
							@if ($errors->has('port'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('port') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Encryption:</label>
							<select class="form-control" id="encryption" name="encryption">
								<option value="">Select Encryption</option>
								<option value="ssl" {{ $settings->encryption == 'ssl' ? 'selected="selected"' : '' }}>SSL</option>
								<option value="tls" {{ $settings->encryption == 'tls' ? 'selected="selected"' : '' }}>TLS</option>
								<option value="none">None</option>
							</select>
							@if ($errors->has('encryption'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('encryption') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit Outbound Setting</button>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="receiving" role="tabpanel">
					<form action="{{ route('savemailsetting') }}" method="post">
					{{ csrf_field() }}
					{{ method_field('post') }}

					<div class="box-body">
						<div class="form-group">
							<label>Vendor:</label>
							<input type="text" class="form-control" placeholder="SMTP" name="vendor" value="{{old('vendor',$settings->vendor)}}">
							@if ($errors->has('vendor'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('vendor') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Host:</label>
							<input type="text" class="form-control" placeholder="Host" name="host" value="{{old('host',$settings->host)}}">
							@if ($errors->has('host'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('host') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" placeholder="Enter Username" name="username" value="{{old('username',$settings->username)}}">
							@if ($errors->has('username'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('username') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Password:</label>							
							<input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password',$settings->password)}}">
							@if ($errors->has('password'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Port</label>							
							<input type="text" class="form-control" placeholder="Enter Port" name="port" value="{{old('port',$settings->port)}}">
							@if ($errors->has('port'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('port') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label>Encryption:</label>
							<select class="form-control" id="encryption" name="encryption">
								<option value="">Select Encryption</option>
								<option value="ssl" {{ $settings->encryption == 'ssl' ? 'selected="selected"' : '' }}>SSL</option>
								<option value="tls" {{ $settings->encryption == 'tls' ? 'selected="selected"' : '' }}>TLS</option>
								<option value="none">None</option>
							</select>
							@if ($errors->has('encryption'))
								<span class="help-block alert-danger">
									<strong>{{ $errors->first('encryption') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-rounded btn-primary pull-right">Submit Inbound Setting</button>
					</div>
				</form>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
					
    </div> 
</div>    
@endsection('content') 
