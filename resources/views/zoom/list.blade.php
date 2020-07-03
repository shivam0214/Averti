@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Latest Meeting</h3>
				</div>
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Meeting ID</th>
                            <th scope="col">Topic</th>
                            <th scope="col">status</th>
                            <th scope="col">Date - Time</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($meetings as $record)
                            <tr>
                            <th scope="row">{{$record['meeting_id']}}</th>
                            <td>{{$record['topic']}}</td>
                            <td>{{$record['status']}}</td>
                            <td>{{date('Y-m-d',strtotime($record['start_time']))}}  {{date('H-i a',strtotime($record['start_time']))}}</td>
                            <td><a href="javascript:void(0)" role="{{$record['meeting_id']}}" class="btn btn-primary waves-effect waves-light invite" >Invite</a> <a  class="btn btn-primary waves-effect waves-light" href="{{route('allmeeting',$record['meeting_id'])}}">Start</a></td>
                            
                            </tr>
                        @endforeach
                        
                            
                            
                        </tbody>
                    </table>
                    </section>
    </div>
</div>
<script>

</script>
@endsection