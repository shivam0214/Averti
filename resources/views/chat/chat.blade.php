@extends('layouts.app')

@section('content') 
<style>

.d-flex.justify-content-between.align-items-center button {
    float: left;
    display: inline-block;
    margin-right: 10px;
}

.d-flex.justify-content-between.align-items-center {display: flex !important;justify-content: flex-end !important;}

</style>
<div class="content-wrapper">
<input type="hidden" id="current_user" value="{{ Auth::user()}}"/>

	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-9 col-md-7 col-12">
				<div class= "mesgs" style="display:none">
				<div class="col-12 mb-3 pt-0 mt-0">
                    <span id="username"></span>
                </div>
				<div class="slimScrollDiv" style="overflow-y: scroll;width: 100%;height: 550px;">
				<ul class="box box-transparent no-border" id="messages" >
					
					</ul>
				</div>
					<div class="box box-body">
						<div class="d-flex justify-content-between align-items-center">
						<form action="http://localhost:3000/uploadFile" id="data" method="post" enctype="multipart/form-data" class ="col-lg-12 col-md-12 col-12">
							<input class="form-control b-0 py-10" id="m" autocomplete="off" type="text" placeholder="Say something...">
							
							<div class="d-flex justify-content-between align-items-center">
							<img src="" id="previewImg" height="200" weight="200" class="hide">
							<div class="hiddenfile">
								<input name="chatAttachment" type="file" id="fileinput" onchange="previewFile(this);">
								</div>
								<button type="button" onclick="browsefile()" class="waves-effect waves-circle btn btn-circle btn-primary">
							<i class="fa fa-paperclip" aria-hidden="true"></i>
								</button>
								<button type="button" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
								<i class="fa fa-microphone" aria-hidden="true"></i>
								</button><button type="button" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
								<i class="fa fa-video-camera" aria-hidden="true"></i>
								</button><button type="submit" class="waves-effect waves-circle btn btn-circle mr-10 btn-outline-primary">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
								</button>

							
							</div>
							</form>
						</div>
						
                    </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-5 col-12">
					<div class="box">
						<div class="box-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs customtab nav-justified" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#messages" role="tab">Messages</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Contacts</a> </li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="messages" role="tabpanel">
									<div class="lookup lookup-sm lookup-right d-none d-lg-block my-20">
										<input type="text" name="s" placeholder="Search" class="w-p100">
								    </div>
									<div class="chat-box-one-side">
										<div class="media-list media-list-hover">
											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-success" href="#">
												<img src="{{asset('assets/img/avatars/1.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
												</p>
												<p>Praesent tristique diam...</p>
												  <span>Just now</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-danger" href="#">
												<img src="{{asset('assets/img/avatars/2.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Luke</strong></a>
												</p>
												<p>Cras tempor diam ...</p>
												  <span>33 min ago</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-warning" href="#">
												<img src="{{asset('assets/img/avatars/4.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Evan</strong></a>
												</p>
												<p>In posuere tortor vel...</p>
												  <span>42 min ago</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-primary" href="#">
												<img src="{{asset('assets/img/avatars/4.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Evan</strong></a>

												</p>
												<p>In posuere tortor vel...</p>
												  <span>42 min ago</span>
											  </div>
											</div>			

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-success" href="#">
												<img src="{{asset('assets/img/avatars/1.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
												</p>
												<p>Praesent tristique diam...</p>
												  <span>Just now</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-danger" href="#">
												<img src="{{asset('assets/img/avatars/2.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Luke</strong></a>
												</p>
												<p>Cras tempor diam ...</p>
												  <span>33 min ago</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-warning" href="#">
												<img src="{{asset('assets/img/avatars/4.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Evan</strong></a>
												</p>
												<p>In posuere tortor vel...</p>
												  <span>42 min ago</span>
											  </div>
											</div>

											<div class="media py-10 px-0">
											  <a class="avatar avatar-lg status-primary" href="#">
												<img src="{{asset('assets/img/avatars/4.jpg')}}" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#"><strong>Evan</strong></a>
												</p>
												<p>In posuere tortor vel...</p>
												  <span>42 min ago</span>
											  </div>
											</div>

										  </div>
									</div>
								</div>
								<div class="tab-pane" id="contacts" role="tabpanel">									
									<div class="lookup lookup-sm lookup-right d-none d-lg-block my-20">
										<input type="text" name="s" placeholder="Search" class="w-p100">
								    </div>
									<div class="chat-box-one-side">
										<div class="media-list media-list-hover">
										@foreach ($users as $record)
											<div class="media py-10 px-0 align-items-center chat_list" onclick="openRoom({{$record['id']}})">
											  <a class="avatar avatar-lg status-success" href="#">
												<img src="{{$record['single']['profile_image']}}" class="img" alt="...">
											  </a>
											  <div class="media-body">
												<p class="font-size-16">
												  <a class="hover-primary" href="#">{{$record['name']}}</a>
												</p>
											  </div>
											</div>
											@endforeach
											

											

													


											
										  </div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
					  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
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
    $.ajax({
        url: 'http://localhost:3000/uploadFile',
        type: 'POST',
        data: formData,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });
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
								li+='<li><div class="card d-inline-block mb-3 float-right mr-2"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-muted">'+ formatAMPM(new Date())+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="#"><img alt="Profile" src="'+current_user.profile+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 ">'+current_user.name+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted">'+img+'<br/>'+data.message_text+' </p></div></div></div></li>'
						
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
			var li = '';let img ='';
			if(data && data.length>0){						
						for(var i=0;i<data.length;i++){
			if(data[i].attachment_url)
			img+= '<img src="'+data[i].attachment_url+'" height="200" weight="200">';
							if(current_user.id == data[i].sender_id){
								li+='<li><div class="card d-inline-block mb-3 float-right mr-2"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-muted">'+ formatAMPM(new Date(data[i].created_date))+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="#"><img alt="Profile" src="'+current_user.profile+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 ">'+current_user.name+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted">'+img+'<br/>'+data[i].message_text+' </p></div></div></div></li>'
						
							}
							else if(current_user.id == data[i].receiver_id){
								li+='<li><div class="card d-inline-block mb-3 float-left mr-2 bg-primary"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-white">'+formatAMPM(new Date(data[i].created_date))+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="#"><img alt="Profile" src="'+activeimg+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 text-white">'+activeUserName+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted text-white">'+img+'<br/>'+data[i].message_text+'</p></div></div></div></li>'
						
							
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