@extends('layouts.app')
<style>
.formbox {
    background: #272e48;
    border: #41475e 1px solid;
    margin: 30px 0px;
    border-radius: 20px;
    display: inline-block;
    width: 100%;
    overflow: hidden;
}
.profileinfo {
    display: inline-block;
    width: 100%;
    padding: 20px;
}

.profileinfo .profilepic {
    width: 25%;
    float: left;
    border-radius: 6px;
    overflow: hidden;
}

.profileinfo .profilepic img {
    width: 100%;
    overflow: hidden;
}

.profile-details {
    width: 75%;
    float: left;
    padding-left: 30px;
}

.profile-details ul {
    margin: 0;
    border: #41475e 1px solid;
    padding: 0;
    display: inline-block;
    width: 100%;
    padding: 20px;
    border-radius: 10px;
}

.profile-details ul li {
    width: 48%;
    float: left;
    font-size: 18px;
    color: #bdd1f8;
    list-style: none;
    border-bottom: #41475e 1px solid;
    line-height: 30px;
    padding: 5px 0px;
    text-transform: capitalize;
}

.profile-details ul li span {
    float: right;
    text-align: right;
    color: #8a99b5;
}

.profile-details ul li:nth-child(odd) {
    margin-right: 2%;
}

.profile-details ul li:nth-child(even) {
    margin-left: 2%;
}

.profile-details ul li:last-child {
    border: 0px;
    padding-bottom: 0px;
    padding-top: 10px;
}
.formbox .card {
    background: #21273e !important;
    border-radius: 0px;
    padding: 0px;
    margin: 0px;
}

.formbox .card-header {
    padding: 0px;
    border: 0px;
}

.formbox .card-header h5 {
    width: 100%;
    display: block;
    background: #21273e;
    border: 0px;
    border-radius: 0px;
    padding: 10px 0px;
}

button.btn.btn-link {
    background: transparent;
    border: 0;
    border-radius: 0px;
}

.formbox .card-body {
    background: #272e48 !important;
    box-shadow: none;
    border: 0px;
}
button.btn.btn-link {
    display: block;
    width: 100%;
    text-align: left;
}

button.btn.btn-link:hover {
    box-shadow: none;
}
.d-flex.justify-content-between.align-items-center button {
    float: left;
    display: inline-block;
    margin-right: 10px;
}

.d-flex.justify-content-between.align-items-center {display: flex !important;justify-content: flex-end !important;}

</style>

@section('content') 
<div class="content-wrapper">
<input type="hidden" id="current_user" value="{{ Auth::user()}}" />

	<div class="container-full">
		<section class="content">	

        <div class="row">
        <div class="col-lg-12 col-sm-10 col-md-12 col-xs-12 ">
					<div class="box">
						<div class="media-list media-list-divided media-list-hover">
							<div class="media align-items-center">
              <h3>
				<a href="{{route('staff_user')}}"  class="d-block"><i class="ti-arrow-left"></i></a>
				</h3>
				
									<a class="avatar avatar-lg status-success" href="#">
										<img src="<?php echo (($details[0]['usermeta_staff_booking']['profile_image'])!= NULL) ? url($details[0]['usermeta_staff_booking']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;">
										
									</a>
								<div class="media-body">
									<p>
									<a href="#"><strong><h4>{{$details[0]['user_staff_booking']['name']}}</h4></strong></a>
									</p>
									<nav class="nav mt-2">
									<a class="nav-link" href="#">	<strong><h4>{{$details[0]['user_professional_data']['specialization']}}</h4></strong>
								</a>  
										</nav>
								</div>
								<div class="media-right">
									<p><i class="fa fa-phone" aria-hidden="true"></i>
									<span>+{{$details[0]['usermeta_staff_booking']['phone_no']}}</span> </p>
									<p><i class="ti-email"></i> 
									<span>{{$details[0]['user_staff_booking']['email']}}</span>
									</p>
										
								</div>
							</div>
						</div>	
					</div>
			</div>    
        </div>
        <section class="content">
		
        <!-- Step wizard -->
         <div class="box box-default">
           <div class="box-header with-border">
             <h4 class="box-title">notification</h4>
           </div>
           <!-- /.box-header -->
<div class="col-lg-8 col-sm-10 col-md-12 col-xs-12 offset-lg-2 offset-md-2 offset-lg-1">
   
   <form name="abc" action="#" method="post">
   <div class="formbox">

<div class="accordion" id="exampleAccordion">

@foreach($details as $record)

   <div class="card">
     <div class="card-header" id="exItem2Header">
       <h5 class="mb-0">
         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mycode{{$record['id']}}" aria-expanded="false" aria-controls="mycode{{$record['id']}}">   {{$record['user_data']['name']}}<p><span>Illness:    {{$record['disease_list']['disease']}}</span>
         </p>
         </button>
       </h5>
     </div>
     <div id="mycode{{$record['id']}}" class="collapse chat_list" aria-labelledby="exItem2Header" data-parent="#exampleAccordion">
         <div class="profileinfo">
                   <div class="profilepic">
                   <a  class="avatar avatar-lg status-success" href="#" style="display:none">
								
                    <img src="{{$record['usermeta_data']['profile_image']}}" class="img" alt="..." >
                    </a>
                    
                   <img src="<?php echo (($record['usermeta_data']['profile_image'])!= NULL) ? url($record['usermeta_data']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" />
                <div class="form-group">
                    <label>Chat</label>
                    <button type="button" data-toggle="modal" data-target="#modal-right_chat" onclick="openRoom({{$record['user_data']['id']}})" class="btn btn-primary waves-effect waves-light "data-target="#Chat">
                <i class="ti-comment-alt"></i></button>

                    <!-- <textarea rows="5" class="form-control" placeholder=" Add message"></textarea> -->
                </div>
	
                  </div>	
                  <div class="profile-details">
                      <ul>
                          <li >Name: <span class="hover-primary">{{$record['user_data']['name']}} </span></li>
                          <li>Last Name: <span>{{$record['user_data']['last_name']}}</span></li>
                          <li>Age: <span>{{$record['usermeta_data']['age']}}</span></li>
                          <li>Illness: <span>{{$record['disease_list']['disease']}}</span></li>
                          <li>Description:<span> {{$record['description']}}</span></li>
                          <li>Duration:<span> {{$record['duration']}}</span></li>
                          <li>Picture:<span> <img src="<?php echo (($record['picture'])!= NULL) ? url($record['picture']) : url(asset('assets/img/avatars/user.png')); ?>"/> </span></li>

                      </ul>	
                  </div>
              </div>

              
   </div>
   @endforeach

     </div>
    </div>
   </form>
</div>
         </div>
         <!-- /.box -->
       </section>
   
        </section>

		
     </div>   
</div>
<div class="modal modal-large fade" id="modal-right_chat" tabindex="-1">

	  <div class="modal-dialog" >
		<div class="modal-content">
		    <div class="modal-header">
				<h3 class="modal-title">Message</h3>
				<button type="button" class="close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
				</button>
		    </div>
		    <div class="modal-body">

				<div class="col-lg-12 col-md-7 col-12">
					<div class= "mesgs" >
						<div class="col-12 mb-3 pt-0 mt-0">
							<span id="username"></span>
						</div>
						<div class="slimScrollDiv" style="overflow-y: scroll; width:100%;height: 300px;">
							<ul class="box box-transparent no-border" id="messages" >
								
							</ul>
						</div>
						<div class="box box-body">
							<div class="d-flex justify-content-between align-items-center">
								<form id="data" method="post" enctype="multipart/form-data" class ="col-lg-12 col-md-12 col-12">
									<input class="form-control b-0 py-10" id="m" autocomplete="off" type="text" placeholder="Say something..." />
									
									<div class="d-flex justify-content-between align-items-center">
										<img src="" id="previewImg" height="200" weight="200" class="hide" />
										<div class="hiddenfile">
											<input name="chatAttachment" type="file" id="fileinput" onchange="previewFile(this);" />
										</div>
										<button type="button" onclick="browsefile()" class="waves-effect waves-circle btn btn-circle btn-primary">
											<i class="fa fa-paperclip" aria-hidden="true"></i>
										</button>
										<button type="button" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
											<i class="fa fa-microphone" aria-hidden="true"></i>
										</button>
										<button type="button" data-toggle="modal" data-target="#modal-right_2" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
											<i class="fa fa-video-camera" aria-hidden="true"></i>
										</button>
										<button type="submit" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
											<i class="fa fa-paper-plane" aria-hidden="true"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
			<div class="modal-footer modal-footer-uniform">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
	    <script>
     var socket = io('http://localhost:3000/');
	 var current_user = JSON.parse($("#current_user").val());
	 var activeUserName = '';
	 var activeimg = ""
	 //var imgURL ='';
      $(function () {	
        $('form#data').submit(function(e){
			e.preventDefault();  
			var formData = new FormData(this);
			$("#previewImg").addClass('hide');
			if($("#fileinput").val()){
				$.ajax({
					url: 'http://localhost:3000/uploadFile',
					type: 'POST',
					data: formData,
					success: function (data) {
						console.log(data)
					},
					cache: false,
					contentType: false,
					processData: false
				});
			}

			socket.emit('chat message', {msg:$('#m').val(),user_id:current_user.id});
			$('#m').val('');
			this.reset();
			return false;
		});
		
        socket.on('bind_msg', function(data){
			console.log(data.img_URL);
			var li = ''; var img ='';
			img+= '<img src="'+data.img_URL+'" height="200" weight="200">';
			if(current_user.id == data.sender_id){
				li+='<li><div class="card d-inline-block mb-3 float-right mr-2"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-muted">'+ formatAMPM(new Date())+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="#"><img alt="Profile" src="'+current_user.profile+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 ">'+current_user.name+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted"><br/>'+data.message_text+' </p></div></div></div></li>'

			}
			else if(current_user.id == data.receiver_id){
				li+='<li><div class="card d-inline-block mb-3 float-left mr-2 bg-primary"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-white">'+formatAMPM(new Date())+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="#"><img alt="Profile" src="'+activeimg+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 text-white">'+activeUserName+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted text-white">'+img+'<br/>'+data.message_text+'</p></div></div></div></li>'
		
			
			}
		
			$('#messages').append(li);
			img = '';	
			// window.scrollTo(0, document.body.scrollHeight);
		});
		
		 // append text if someone is online
            // socket.on('is_online', function(username) {
                // $('#messages').append($('<li>').html(username));
            // });
		$(".chat_list").on('click', function () {
			activeUserName = $(this).find(".hover-primary").text();
			activeimg = $(this).find(".img").attr('src');
			
			 socket.emit('username', activeUserName);
            $(".chat_list").removeClass("active_chat")
            $(this).addClass("active_chat")
            $("#username").html("Talking to <strong>" + activeUserName + "</strong>");
            $(".mesgs").show();
        }) ;
		socket.on('AllMessageFromRoom', function(data){
			socket.emit('messageData', data);
         // window.scrollTo(0, document.body.scrollHeight);
		});
		
		socket.on('messageDataAll', function(data){	
			console.log(data);
			var li = '';let img ='';
			if(data && data.length>0){						
				for(var i=0;i<data.length;i++){
					if(data[i].attachment_url){
						img+= '<img src="'+data[i].attachment_url+'" height="200" weight="200">';
					}
			
					if(current_user.id == data[i].sender_id){
						li+='<li><div class="card d-inline-block mb-3 float-right mr-2"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-muted">'+ formatAMPM(new Date(data[i].created_date))+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="javascript:void(0)"><img alt="Profile" src="'+current_user.profile+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 ">'+current_user.name+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted"><br/>'+data[i].message_text+' </p></div></div></div></li>'
				
					}
					else if(current_user.id == data[i].receiver_id){
						li+='<li><div class="card d-inline-block mb-3 float-left mr-2 bg-primary"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-white">'+formatAMPM(new Date(data[i].created_date))+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="javascript:void(0)"><img alt="Profile" src="'+activeimg+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 text-white">'+activeUserName+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted text-white">'+img+'<br/>'+data[i].message_text+'</p></div></div></div></li>'
				
					
					}
					img='';
				}
				$('#messages').html(li);
			}
			else{
				$('#messages').html(li);
			}
         // window.scrollTo(0, document.body.scrollHeight);
        });
	  });
	  
	function openRoom(uid){
		socket.emit('create_room', {curren_user:current_user.id,clientId:uid});
	}

	function formatAMPM(date) {
		var hours = date.getHours();
		var minutes = date.getMinutes();
		var ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		hours = hours ? hours : 12; // the hour '0' should be '12'
		minutes = minutes < 10 ? '0'+minutes : minutes;
		var strTime = hours + ':' + minutes + ' ' + ampm;
		return strTime;
	}
	function browsefile(){
		$('#fileinput').trigger('click'); 
	}
	function previewFile(input){	    
        var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
			//	imgURL = reader.result;
				socket.emit('Image_URL', reader.result);
				$("#previewImg").removeClass('hide');
				$("#previewImg").addClass('show');
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
	</script>
@endsection('content')
