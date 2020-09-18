@extends('main.header')
<style>
	#cards{
	height: 400; 
	background-color: #f1f1f5;
	border: 2px solid #dedede;
	}
  #div1, #div2 {
  float: left;
  width: 100%;
height: 300;
  margin: 10px;
  padding: 10px;
}
</style>
@section('content')
<div class="content-wrapper">
  	<div class="container-fluid">
  	    <div class="row">
  	    	<div class="col-lg-12">
  	    		<div class="card">
  	    			<div class="card-body">
  	    				<ui class="nav nav-tabs nav-tabs-primary ">
  	    					<li class="nav-item">
                    			<a class="nav-link" data-toggle="modal" data-target="#createleads"><i aria-hidden="true" class="fa fa-plus-square"></i> Create</a>
                    		</li>  	    					
  	    				</ui>
                  		<div class="row pt-3">
                  			<div class="col-md-2">
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>New Leads</p>
                  					</div>
                  					<div class="card-body">
                  						<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                  						<p draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31" style="border: 2px solid #dedede;">Leads File</p>	
										</div>
                  					</div>	
                  				</div>
                  			</div>
                  			<div class="col-md-2" >
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>Contacted</p>
                  					</div>
                  					<div class="card-body">
                  						
                  						<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  					</div>	
                  				</div>
                  			</div>
                  			<div class="col-md-2" >
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>Proposal Sent</p>
                  						</div>

                  					<div class="card-body">
                  								<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                   					</div>	
                  				</div>
                  			</div>
                            <div class="col-md-2" >
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>Contact Later</p>
                  						</div>
                  					<div class="card-body">
                  						<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  					</div>	
                  				</div>
                  			</div>
                  			<div class="col-md-2" >
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>Lost</p>
                  						</div>
                  					<div class="card-body">
                  						<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  					</div>	
                  				</div>
                  			</div>
                  			<div class="col-md-2" >
                  				<div class="card" id="cards">
                  					<div class="card-header">
                  							<p>Won</p>
                  						</div>
                  					<div class="card-body">
                  						<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  					</div>	
                  				</div>
                  			</div>
                  		</div>	
  	    			</div>	
  	    		</div>	
  	    	</div>	
  	    </div>	
  	</div>	
</div> 
<div class="modal fade" id="createleads">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs nav-tabs-primary">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#general"><span>General</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#location"><span>Location	
                              </span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#web"><span>web
                              </span></a>
                            </li>
							<li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#msg"><span>Message</span></a>
                            </li>                            
                         </ul>                        
                    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          		<span aria-hidden="true">&times;</span>
                        	</button>
            </div>                      
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                  		<div class="tab-content"> 
                  			                   	
	                        <div id="general" class="container tab-pane active">
	                        	<form>
		                        	<div class="row">
						                <div class="col-md-4">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="FirstName" >FIRST NAME</label>
						                            <input type="text" id="FirstName" name="name" class="form-control" placeholder=" First Name">
						                        </div>
						                    </div>
						                </div> 
						                <div class="col-md-4">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="last_Name" >MIDDLE NAME</label>
						                            <input type="text" id="last_Name" name="middle_name" class="form-control" placeholder=" Middle Name">
						                        </div>
						                    </div>
						           		</div>
						                <div class="col-md-4">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="LastName" >LAST NAME</label>
						                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder=" Last Name" >
						                        </div>
						                    </div>
						                </div>  
						            </div>  
		            				<div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="email" >Emial</label>
						                            <input type="email" id="email" name="email" class="form-control" placeholder=" Email">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="mob_no" >Phone Number</label>
						                            <input type="text" id="mob_no" name="mob_no" class="form-control" placeholder=" Phone Number">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="Source" >Source</label>     
						                            <select class="form-control" id="source">
							                            <option value="">Select Source</option>
							                            <option value="1">Facebook </option>
							                            <option value="2">Gmail</option>
							                            <option value="3">Other</option>
							                        </select>
						                        </div>
						                    </div>
						                </div>
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="Stage" >Stage</label>     
						                            <select class="form-control" id="stage">
							                            <option value="">Select Stage</option>
							                            <option value="1">New eads</option>
							                            <option value="2">Old Leads</option>
							                            <option value="3">Other</option>
							                        </select>
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="Leads_score" >Leads Score</label>
						                            <input type="text" id="leads_score" name="leads_score" class="form-control" placeholder=" Score">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="leads_value">Leads Value</label>
						                            <input type="text" id="leads_value" name="leads_value" class="form-control" placeholder="0.00">
						                        </div>
						                    </div>
						                </div>
						            </div>

						            <div class="row">
						                <div class="col-md-12">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="tags" >Tags</label>
						                            <input type="text" id="tags" name="tags" class="form-control" placeholder=" Tags">
						                        </div>
						                    </div>
						                </div>
						            </div>
						    	</form>
						    </div>

	                        <div id="location" class="container tab-pane fade">
		                        <form>
		                        	<div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="Job_Title" >Job Title</label>
						                            <input type="text" id="job_title" name="job_title" class="form-control" placeholder=" Job Title">
						                        </div>
						                    </div>
						                </div> 
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="mob_num" >Mobile Number</label>
						                            <input type="text" id="mob_num" name="mob_num" class="form-control" placeholder="Mobile Number">
						                        </div>
						                    </div>
						           		</div>  
						            </div>  
		            				<div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="address1" >Address1</label>
						                            <input type="text" id="address1" name="address1" class="form-control" placeholder=" Address">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="address2" >Address2</label>
						                            <input type="text" id="address2" name="address2" class="form-control" placeholder=" Address">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="row">
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="city" >City</label>
						                            <input type="text" id="city" name="city" class="form-control" placeholder=" city">
						                        </div>
						                    </div>
						                </div>
						                <div class="col-md-6">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="state">State</label>
						                            <input type="text" id="state" name="state" class="form-control" placeholder="State">
						                        </div>
						                    </div>
						                </div>
						            </div>

						            <div class="row">
						                <div class="col-md-12">
						                    <div class="form-group">
						                        <div class="position-relative">
						                            <label for="country" >Country</label>
						                            <input type="text" id="country" name="country" class="form-control" placeholder=" Country">
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </form>
						    </div>
	                        <div id="web" class="container tab-pane fade" style="height: 200">
	                        	<div class="row">
					                <div class="col-md-12">
					                    <div class="form-group">
					                        <div class="position-relative">
					                            <label for="web" >WebSite</label>
					                            <input type="text" id="web" name="web" class="form-control" placeholder=" WebSite">
					                        </div>
					                    </div>
					                </div>
						        </div>
	                        </div>
	                        <div id="msg" class="container tab-pane fade">
	                        	<div id="summernoteEditor">
				                    
                  				</div>
							</div>		                        	
						</div>    
                    </div>                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
            </div>
        </div>
    </div>
</div>
<script>
function allowDrop(ev) {
  ev.preventDefault();

}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
  //alert(JSON.stringify(ev));
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
@endsection
@extends('main.footer')
