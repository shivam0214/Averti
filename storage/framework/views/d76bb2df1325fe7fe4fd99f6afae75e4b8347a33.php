<?php $__env->startSection('content'); ?> 
<style>
.d-flex.justify-content-between.align-items-center button {
    float: left;
    display: inline-block;
    margin-right: 10px;
}

.d-flex.justify-content-between.align-items-center {display: flex !important;justify-content: flex-end !important;}
</style>

<div class="content-wrapper">
<input type="hidden" id="current_user" value="<?php echo e(Auth::user()); ?>" />

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User List</h3>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title"></h4>
							<div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
									<input type="text" name="s">
								</div>
							</div>
						</div>
						<div class="box-body no-padding">
							<div class="table-responsive">
							<table class="table">
                        <thead>
                          <tr>
                                    <th scope="col"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div></th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th> 
                                    <th scope="col">Advisor Type</th>                                  
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody  style="height:50%">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class ="chat_list">
								<td scope="row"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div>
								</td>
								<td>
								<a style="display:none" class="avatar avatar-lg status-success" href="#">
										<img src="<?php echo e($record['single']['profile_image']); ?>" class="img" alt="..." >
								</a>
											  
								<img src="<?php echo (($record['single']['profile_image'])!= NULL) ? url($record['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>"  alt="&#xf013;" height="50px" width="50px">
								</td>
								<td ><a class="hover-primary" href="<?php echo e(route('view_profile',['id'=>$record->id])); ?>"><?php echo e($record['name']); ?> </a></td>
								<td><?php echo e($record['single']['phone_no']); ?></td>
								<td><?php echo e($record['catname']['category_name']); ?></td>
								<td><button type="button" data-toggle="modal" data-target="#modal-right_2" class="btn btn-success waves-effect waves-light" data-target="#audio-call"><i class="fa fa-phone"></i></button>
								<button type="button" data-toggle="modal" data-target="#modal-right_chat" onclick="openRoom(<?php echo e($record['id']); ?>)" class="btn btn-primary waves-effect waves-light "data-target="#Chat">
								<i class="ti-comment-alt"></i></button>

								<button type="button" data-toggle="modal" data-target="#modal-right_2"  class="btn btn-primary waves-effect waves-light" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
									    <a class="btn btn-info waves-effect waves-light" href="<?php echo e(route('view_profile',['id'=>$record->id])); ?>"><i class="fa fa-edit"></i></a>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button></td>
							</tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                   		</div>
						</div>	
					</div>
				</div>
			</div>	
		
  		
		</section>
	
	</div>
</div>
	<div class="modal modal-right fade" id="modal-right_2" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title">Video Calling</h3>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
		  <img src="<?php echo e(asset('assets/images/advisor/video_call.jpg')); ?>" alt="..." class="m-10">
				<textarea class="publisher-input auto-expand" rows="4" placeholder="Type notes here..."></textarea>
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			
		</div>
	  </div>
	</div>
</div>
<div class="modal modal-right fade" id="modal-right_chat" tabindex="-1">

	  <div class="modal-dialog" style="width:500px; height:700px">
		<div class="modal-content">
		    <div class="modal-header">
				<h3 class="modal-title"><span id="username"></span></h3>
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
						<div class="slimScrollDiv" style="overflow-y: scroll;width: 100%;height: 400px;">
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
			console.log(data);

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
			console.log(data);
			var li = '';let img ='';
			if(data && data.length>0){						
				for(var i=0;i<data.length;i++){
					if(data[i].attachment_url){
						img+= '<img src="'+data[i].attachment_url+'" height="200" weight="200">';
					}
			
					if(current_user.id == data[i].sender_id){
						li+='<li><div class="card d-inline-block mb-3 float-right mr-2"><div class="position-absolute pt-1 pr-2 r-0"><span class="text-extra-small text-muted">'+ formatAMPM(new Date(data[i].created_date))+'</span></div><div class="card-body"><div class="d-flex flex-row pb-2"><a class="d-flex" href="javascript:void(0)"><img alt="Profile" src="'+current_user.profile+'" class="avatar mr-10"></a><div class="d-flex flex-grow-1 min-width-zero"><div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between"><div class="min-width-zero"><p class="mb-0 font-size-16 ">'+current_user.name+'</p></div></div></div></div><div class="chat-text-left pl-55"><p class="mb-0 text-semi-muted">'+img+'<br/>'+data[i].message_text+' </p></div></div></div></li>'
				
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
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/listuser.blade.php ENDPATH**/ ?>