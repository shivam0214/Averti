
<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Users</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                <form class="form-horizontal" role="form"  method="post" action="{{route('group_list')}}">
					
				<div class="modal-body">
				<div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                <input type="hidden" name="group_users_id"  value="{{$group_users_id}}">
		                          @foreach ($contacts as $records)
									@csrf
                                    <div class="media align-items-center">
                                  <a class="avatar avatar-lg status-success" href="#">
								  <input type="hidden" value="{{$records->id}}" name="id">
                                    <img src="<?php echo (($records['single']['profile_image'])!= NULL) ? url($records['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
                                    </a>
                                    <div class="media-body">
                                        <p>
                                        <a href="#"><strong>{{$records['name']}}</strong></a>
                                        </p>
                                        <p><strong>{{$records['email']}}</strong></p>
                                    </div>
                                    <div class="media-right gap-items">
									<button type="submit" class="btn btn-success" >Add</button>
									</div>
                                    </div>

                                    @endforeach
                                </div>
                                </div>
                            </div>			
				</div>
               </div> 
               </form>

				<div class="modal-footer">
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div>