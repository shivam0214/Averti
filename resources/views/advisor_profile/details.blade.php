@extends('main.header')
@section('content')
<div class="content-wrapper">

<div class='container '>
  <div class="row">
    <div class="col-md-6">
        <div class="card mx-auto my-3">
          <div class="card-body "> 
            <ul class="nav nav-tabs nav-tabs-primary">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabe-1"> Profile</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabe-2"> Qualification</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabe-3"> Personal Informations</span></a>
                  </li>                
            </ul>
            <div class="tab-content">
              <div id="tabe-1" class="container tab-pane active">
                  <form  method="POST" action="">
                    <div class="form-group">
                        <img src="https://via.placeholder.com/110x110" alt="profile-image" class="img-circle" >
                        <span class="input-group-btn">
                          <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                              <i class="fa fa-picture-o"></i>Profile Image
                          </a>
                        </span>
                        <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                    </div>

                    <div class="form-group">
                        <label for="input-6">Name</label>
                        <input type="text" class="form-control form-control" id="input-6" placeholder="Web">
                   </div>
                   <div class="form-group">
                        <label for="input-7">Additional Names</label>
                        <input type="text" class="form-control form-control" id="input-7" placeholder="Enter Additional Name For This Organizations">
                   </div>
                   <div class="form-group">
                        <label for="input-8">Types</label>
                        <input type="text" class="form-control form-control" id="input-8" placeholder="Company">
                   </div>
                   <div class="form-group">
                        <label for="input-9">Address</label>
                        <input type="text" class="form-control form-control" id="input-9" placeholder="Address">
                   </div>
                   <div class="form-group">
                      <label for="input-10">number</label>
                      <input type="number" class="form-control form-control" id="input-10" placeholder="Ex: Mobile Number">
                   </div>                 
                   <div class="form-group">
                      <label for="input-10">Website</label>
                      <input type="text" class="form-control form-control" id="input-10" placeholder="Ex: g.com">
                   </div>
                   <div class="form-group">
                      <label for="input-10">Description</label>
                      <input type="text" class="form-control form-control" id="input-10" placeholder="What does this organizations do?">
                   </div>                 
                  </form>
                  <div class="form-group">
                        <button type="submit" class="btn btn-primary px-5"> save</button>
                  </div>
              </div>
              <div id="tabe-2" class="container tab-pane fade">
                     <div class="card-title">Skills  
                     </div>
                     <hr>
                      <form  method="POST" action="">
                         <div class="form-group">
                          <label for="input-6">Organigation Name</label>
                          <input type="text" class="form-control form-control" id="input-6" placeholder="Organigation Name">
                         </div>
                         <div class="form-group">
                          <label for="input-7">Indursty </label>
                          <input type="text" class="form-control form-control" id="input-7" placeholder="Indursty">
                         </div>
                         <div class="form-group">
                          <label for="input-8">Position Title</label>
                          <input type="text" class="form-control form-control" id="input-8" placeholder="Position Title">
                         </div>
                      </form>
                      <div class="card-title">
                                  Education History  
                               </div>
                                 <hr>
                      <form  method="POST" action="">
                           <div class="form-group">
                            <label for="input-6">Name</label>
                            <input type="text" class="form-control form-control" id="input-6" placeholder="Name">
                           </div>
                           <div class="form-group">
                            <label for="input-7">Degree Of Certification</label>
                            <input type="text" class="form-control form-control" id="input-7" placeholder="Indursty">
                           </div>
                           <div class="form-group">
                            <label for="input-8">Position Title</label>
                            <input type="text" class="form-control form-control" id="input-8" placeholder="Position Title">
                           </div>           
                      </form>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary px-5"> save</button>
                      </div>
              </div>
              <div id="tabe-3" class="container tab-pane fade">
                    <div class="card-title">Personal Information  
                    </div>
                    <hr>
                <form  method="POST">
                     <div class="form-group">
                      <label for="input-6">ID Proof</label>
                      <input type="text" class="form-control form-control" id="input-6" placeholder="ID">
                     </div>
                    <div class="form-group">
                      <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                            <i class="fa fa-picture-o"></i> Upload Image
                                        </a>
                                    </span>
                                </div>        
                                <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                            </div>                               
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary px-5"> save</button>
                      </div>
                </form>                 
            </div>         
            </div>  
          </div> 
        </div>         
  </div> 
</div>
</div>
@endsection
@extends('main.footer')
