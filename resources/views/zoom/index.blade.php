<style>
.modal-right .modal-content{
  height:auto;
}
</style>
 
<script src="{{asset('assets/js/custom/zoom.js')}}"></script>
{!! Form::open(['id'=>'create_meetingform']) !!}
<div class="modal-dialog">
		<div class="modal-content">
    
		  <div class="modal-header">
      
			<h5 class="modal-title">Create Meeting</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="backloader"><div class="loader"></div></div>
            
            {!! Form::label('title','Meeting title') !!}
            {!! Form::text("topic",'',['class'=>'form-control']) !!}
            {!! Form::label('email','Email') !!}
            {!! Form::email('email','', ['class'=>'form-control']) !!}
            {!! Form::label('email','Start Date Time') !!}
            {!! Form::date('start_time','', ['class'=>'form-control']) !!}
            {!! Form::label('password','') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
            {!! Form::label('Duration','Duration (Min)') !!}
            {!! Form::number('duration','', ['class'=>'form-control']) !!}
            
            {!! Form::label('timezone','Timezone') !!}

            <select class="form-control" name="timezone">
                
                @foreach ($timezone as $k)
                    <option value="{{$k['name']}}">{{$k['timezome']}}</option>
                @endforeach
                
            </select>
            
            
          <div class="form-check">
          {!! Form::checkbox('option_jbh',1, '', ['class'=>'form-check-input','id'=>'defaultCheck1']) !!}
          {!! Form::label("defaultCheck1", 'Join Before Host',['class'=>'form-check-lable']) !!}
          </div>
          <div class="form-check">
            {!! Form::checkbox('option_host_videot',1, '', ['class'=>'form-check-input','id'=>'defaultCheck2']) !!}
            {!! Form::label("defaultCheck2", 'Host join start',['class'=>'form-check-lable']) !!}
          </div>
          <div class="form-check">
            {!! Form::checkbox('option_participants_video',1, '', ['class'=>'form-check-input','id'=>'defaultCheck3']) !!}
            {!! Form::label("defaultCheck3", 'Participants Video',['class'=>'form-check-lable']) !!}
          </div>  
            
            
            
            
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			
      
      {!! Form::submit("Create", ['class'=>'btn btn-primary float-right',"id"=>"createmfm"]) !!}
      
		
      </div>
		
    </div>
	  </div>
    {!! Form::close() !!}  