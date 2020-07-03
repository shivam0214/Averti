{!! Form::open(['id'=>'sendinvite']) !!}
<div class="modal-header">
      
			<h5 class="modal-title">Invite User</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="backloader"><div class="loader"></div></div>
            
            {!! Form::hidden('mid', $mid) !!}
            
            {!! Form::label('title','Meeting title') !!}
            {!! Form::text("topic",'',['class'=>'form-control']) !!}
           
            {!! Form::label('user','Chooser users') !!}

            <select class="" id="multiple" name="users[]" multiple>
                
                @foreach ($users as $k)
                    <option value="{{$k['id']}}">{{$k['name']}}</option>
                @endforeach
                
            </select>
            
            <br>
            <br>
         
      
      {!! Form::submit("Invite", ['class'=>'btn btn-primary float-right',"id"=>""]) !!}
   
		
      </div>
         {!! Form::close() !!}  
         <br>
<script>
$(document).ready(function(){  
new SlimSelect({
select: '#multiple', 
});

$('#sendinvite').submit(function(e) {
    e.preventDefault();
    var inputData = new FormData($(this)[0]);
    $.ajax({
            url:'/sendinvite',
            type:'POST',
            dataType: 'json',
            data:inputData,
            processData:false,
            contentType:false,
             beforeSend: function () {
                $('.backloader').show();
              },
              complete: function () {
                $('.backloader').hide();
              },
            success: function (response) {
                
              if(response.status==1){
                $('#modal-right').modal('hide');
                toastr.success(response.msg);
                setTimeout(function(){ window.location.href = "/getmeeting"; }, 3000);
              }else{
                toastr.error(response.message);
              }
             
            }
      });
  });
  });
</script>		