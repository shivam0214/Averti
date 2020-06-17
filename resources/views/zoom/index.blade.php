<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Create Meeting</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			
            {!! Form::open() !!}
            {!! Form::label('title','Meeting title') !!}
            {!! Form::text("meetingtitle",'',['class'=>'form-control']) !!}
            {!! Form::label('email','Email') !!}
            {!! Form::email('email','', ['class'=>'form-control']) !!}
            {!! Form::label('email','Start date') !!}
            {!! Form::date('startdate','', ['class'=>'form-control']) !!}
            {!! Form::label('email','Start Time') !!}
            {!! Form::text('starttime','', ['class'=>'form-control timepicker']) !!}
            
            {!! Form::label('password','',) !!}
            
            {!! Form::password('password', ['class'=>'form-control']) !!}
            
            {!! Form::label('Duration','Duration') !!}
            
            {!! Form::number('duration','', ['class'=>'form-control']) !!}
            
            {!! Form::label("Join Before Host", 'Join Before Host') !!}
 <p>Join meeting before host start the meeting. Only for scheduled or recurring meetings.</p>           
            <label class="">
	<div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;">
    <input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;">
    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
    </div>
							</label>
            {!! Form::checkbox('joinbefor',1,, [$options]) !!}
            
 
Host join start
 Start video when host join meeting
Participants Video
 Start video when participants join meeting.
            
            
            
            {!! Form::label('Timezone','timezone') !!}

            <select class="form-control" name="timezone">
                
                @foreach ($timezone as $k)
                    <option value="{{$k['name']}}">{{$k['timezome']}}</option>
                @endforeach
                
            </select>
            
            
            {!! Form::close() !!}
            
            
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary float-right">Create</button>
		  </div>
		</div>
	  </div>