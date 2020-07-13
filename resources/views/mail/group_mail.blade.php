							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Compose New Message</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<form method="POST" action="#" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
							<input type="hidden" name="gmid" id="gmid" value="#">

								<div class="form-group">
									<input class="form-control" placeholder="To:" name="to" value="{{$myemails}}">
								  </div>
								  <div class="form-group">
									<input class="form-control" placeholder="Subject:" name="subject">
								  </div>
								  <div class="form-group">
									<select class="form-control" placeholder="Template:" name="template" id="templatebody" onChange="getBody(this.value)">
									<option value="0">Select Template</option>
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
					
				<!-- /.modal -->