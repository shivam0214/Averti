@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-2 col-lg-4 col-12">
				  <button class="btn btn-danger btn-block mb-30" type="button" alt="default" data-toggle="modal" data-target=".bs-example-modal-lg">Compose</button>

				  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Compose New Message</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<form method="POST" action="{{route('mailer.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
					
								<div class="form-group">
									<select class="form-control" placeholder="Group:" name="group" onChange="getgroup(this.value)">
									<option value="0">Select Group</option>
									@foreach ($groups as $record)
										<option value="{{$record['id']}}">{{$record['group_name']}}</option>
										@endforeach

									</select>
								  </div>

								<div class="form-group">
									<input class="form-control" placeholder="To:" name="to" id="to" >
								  </div>
								  <div class="form-group">
									<input class="form-control" placeholder="Subject:" name="subject">
								  </div>
								  <div class="form-group">
									<select class="form-control" placeholder="Template:" name="template" id="templatebody" onChange="getBody(this.value)">
									<option value="0">Select Template</option>
									@foreach($templates as $template)
										<option value="{{$template->id}}">{{$template->title}}</option>
									@endforeach
									</select>
								  </div>

								  <div class="form-group">
										<textarea id="compose-textarea" class="form-control" style="height: 300px" name="body">
										</textarea>
								  </div>
								  <div class="form-group">
									<div class="btn btn-info btn-file">
									  <i class="fa fa-paperclip"></i> Attachment
									  <input type="file" name="attachment">
									</div>
									<p class="help-block">Max. 32MB</p>
								  </div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
									<button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Send</button>
								</div>
								<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
								<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
							</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Folders</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-slide" href="#"></a></li>	
					  </ul>
					</div>
					<div class="box-body no-padding mailbox-nav">
					  <ul class="nav nav-pills flex-column">
						<li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox <span class="label label-info pull-right">{{$countMails[1]->total}}</span></a></li>

						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent <span class="label label-success pull-right">{{$countMails[0]->total}}</span></a></li>
						
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts <span class="label label-primary pull-right">{{$draft}}</span></a></li>

						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right" id="starredcount">
							{{$starred}}
						</span></a>
						</li>

						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash <span class="label label-danger pull-right" id="trashcount">
							{{$countMails[2]->total}}
						</span></a></li>

					  </ul>
					</div>
					<!-- /.box-body -->
				  </div>
				  
				  <!-- /. box -->
				  <div class="contact-bx">
				  	@foreach ($contacts as $records)
						<div class="media-list media-list-hover">
							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-success" href="#">
							  <img src="<?php echo (($records['single']['profile_image'])!= NULL) ? url($records['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">{{$records['name']}}</a>
								</p>
							  </div>
							</div>
						</div>
					@endforeach
	
					</div>
			
				</div>
				
				<!-- /.col -->
				<div class="col-xl-6 col-lg-8 col-12">
					<span id="syncInboxResponse"></span>
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Inbox</h4>
						<div class="box-controls pull-right">
						<div class="box-header-actions">
						  <!-- <div class="lookup lookup-sm lookup-right d-none d-lg-block">
							<input type="text" name="s" placeholder="Search">
						  </div> -->
						</div>
					  </div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <div class="mailbox-controls">
						<!-- Check all button -->
						<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
						</button>
						<div class="btn-group">
						  <button type="button" class="btn btn-primary btn-sm" onClick="Delete()"><i class="fa fa-trash"></i></button>
						</div>
						<!-- /.btn-group -->
						<button type="button" class="btn btn-primary btn-sm" onClick="syncInbox()"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
						  <div class="btn-group">
							  {{-- $mailer->links() --}}
						  </div>
						  <!-- /.btn-group -->
						</div>
						<!-- /.pull-right -->
					  </div>
					  <div class="mailbox-messages inbox-bx">
						  <div class="table-responsive">
							<table class="table table-hover table-striped">
							  <tbody>
							  @foreach($mailer as $val)
							  <tr>
								<td><input type="checkbox" class="checkbox_mail" name="check[]" value="{{$val->id}}"></td>
								<td class="mailbox-star" id="starred{{$val->id}}">
									@if($val->is_starred=='0')
										<a onClick="starred({{$val->id}},1)"><i class="fa text-yellow fa-star-o"></i></a>
									@else
										<a onClick="starred({{$val->id}},0)"><i class="fa text-yellow fa-star"></i></a>
									@endif
								</td>
								<td>
									<p class="mailbox-name mb-0 font-size-16 font-weight-600">{{$val->fullname}}</p>
									<a class="mailbox-subject" href="javascript:void(0)" onClick="getMessage({{$val->id}})">
										{{$val->subject}}
									</a>
								</td>
								<td class="mailbox-attachment">
								@if($val->is_attachment=='1')
									<i class="fa fa-paperclip"></i>
								@endif
								</td>
								<td class="mailbox-date">{{-- date('H:i:s a', strtotime($val->created_at)) --}}{{ Carbon\Carbon::parse($val->created_at)->diffForHumans() }}</td>
							  </tr>
							  @endforeach
							  </tbody>
							</table>
						  </div>                
						<!-- /.table -->
					  </div>
					  <!-- /.mail-box-messages -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <div class="mailbox-controls">
						<!-- Check all button -->
						<button type="button" id="selecctall" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
						</button>
						<div class="btn-group">
						<button type="button" class="btn btn-primary btn-sm" title="Delete Selected Mail"><i class="fa fa-trash"></i></button>
						</div>
						<!-- /.btn-group -->
						<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
						  <div class="btn-group">
						  {{ $mailer->links() }}
							<!-- <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i></button>
							<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button> -->
						  </div>
						  <!-- /.btn-group -->
						</div>
						<!-- /.pull-right -->
					  </div>
					</div>
				  </div>
				  <!-- /. box -->
				</div>
				<!-- /.col -->

				<!-- Message Body content area -->
				<div class="col-xl-4 col-12">
				  <div class="box">
					<div class="box-body pt-10">
					  <div class="mailbox-read-info" id="subject">
						<h4>Your message title goes here</h4>
					  </div>
					  <div class="mailbox-read-info clearfix mb-20">
						<div class="float-left mr-10">
							<a href="#">
								<img src="{{asset('assets/img/avatars/user.png')}}" alt="user" width="40" class="rounded-circle">
							</a>
						</div>
						<h5 class="no-margin" id="mails"> <!-- Pavan kumar --><br>
							<!-- <small>To: jonathan@domain.com</small> -->
							
						</h5>
					  </div>
					  <!-- /.mailbox-read-info -->
					  <div class="mailbox-controls with-border clearfix">                
						<div class="float-left">
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Print">
						  <i class="fa fa-print"></i></button>
						</div>

						<!-- <div class="float-right">
							<div class="btn-group">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
							</div>
						</div> -->
						<!-- /.btn-group -->

					  </div>
					  <!-- /.mailbox-controls -->
					  <div class="mailbox-read-message read-mail-bx" id="body">
					  <h4>Your content goes here</h4>
					  </div>
					  <!-- /.mailbox-read-message -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<h5>
							<!-- <i class="fa fa-paperclip m-r-10 m-b-10"></i>
							Attachments 
							<span>(3)</span> -->
						</h5>
						<ul class="mailbox-attachments clearfix" id="attachments">
							<!-- Attachment files list goes here from ajax -->
						</ul>
					</div>
					<!-- /.box-footer -->
					<div class="box-footer">
					  <div class="pull-right">
						<button type="button" class="btn btn-success"><i class="fa fa-reply"></i> Reply</button>
						<button type="button" class="btn btn-info"><i class="fa fa-share"></i> Forward</button>
					  </div>
					</div>
					<!-- /.box-footer -->
				  </div>
				  <!-- /. box -->
				</div>
				<!-- /.col -->
			  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection
<script>
function Delete(){
	var chkArray = [];
	$("input[name='check[]']:checked").map(function() {
		chkArray.push(this.value);
	}).get();
	var selected;
	selected = chkArray.join(',') + ",";
	if(selected.length > 1){
		$.ajax({
            type: "POST",
            url: '/trash',
            data: {mails_id: selected,"_token": "{{ csrf_token() }}"},
            success: function( msg ) {
                // $("#ajaxResponse").append("<div>"+msg+"</div>");
				$("#trashcount").html(msg.trash);
            }
        });
		// alert('Selecionar todos?'+selected);
	} else { alert('Remover'); }       

}

function starred(val,star){
	// alert(val+"::"+star)
	$.ajax({
		type: "POST",
		url: '/starred',
		data: {mails_id: val,is_starred:star,"_token": "{{ csrf_token() }}"},
		success: function( msg ) 
		{
			// alert(val+"::"+star)
			$("#starredcount").html(msg.starred);
		}
	});
}

function getMessage(val){
	$.ajax({
		type: "GET",
		url: '/getmail',
		data: {mailid: val,"_token": "{{ csrf_token() }}"},
		success: function( msg ) 
		{
			console.log(msg);
			$("#subject").html("<h4>"+msg.mail.subject+"</h4>");
			$("#mails").html(msg.mail.to);
			$("#mails").append("<br /><span class='mailbox-read-time'>"+msg.mail.created_at+"</span>");
			$("#body").html(msg.mail.body);
			// msg.mail.attach.forEach(ele=>{
				if(msg.mail.filename!==null && msg.mail.filename !==undefined){
					var downld = "{{ asset('') }}";
					var sds = downld+'storage/app/'+msg.mail.filepath+msg.mail.filename;
					// console.log(sds);
					// console.log("{{ route('downloadattachment',"+msg.mail.filename+") }}");
					$("#attachments").html('<li><div class="mailbox-attachment-info"><a href=\"#\" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '+msg.mail.filename+'</a></div></li>');
				}

			// })

		}
	});

}
function getBody(id){
	console.log(id)
	$.ajax({
	type: "GET",
	url: '/gettemplatebody',
	data: {templateid: id,"_token": "{{ csrf_token() }}"},
	success: function( data ) {
		// console.log(data);
		document.getElementById("compose-textarea").innerHTML = data.result;
	}
	});
}

function getgroup(id){
//	console.log(id);
	$.ajax({
		type: "GET",
		url: '/getmails',
		data: {group_id: id,"_token": "{{ csrf_token() }}"},
		success: function( data ) {
			console.log(data);
			$("#to").val(data.mail_result)
		}
	});
}

function syncInbox(){
	$( "i.fa-refresh" ).addClass("fa-spin");
	$('#syncInboxResponse').html('<div class="alert alert-warning alert-dismissible fade show" role="alert">Inbox syncing is initiated it may takes few minutes to sync with your system.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')
	$.ajax({
		type: "GET",
		url: '/inboundmails',
		data: {"_token": "{{ csrf_token() }}"},
		success: function( data ) {
			console.log(data);
			$( "i.fa-refresh" ).removeClass("fa-spin");
			$('#syncInboxResponse').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')


		}
	});
}
</script>
