
@extends('main.header')
@section('content')    
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> User List</div>
            <div class="card-body">
              <div class="table-responsive">

                    <table class="table">
                        <thead>
                          <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th> 
                                    <th scope="col">Status</th>                                  
                                    <th scope="col">COMPLETION</th>
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                                <tr>
                                  <th scope="row">
                                    <div class="icheck-material-primary">
                                    <input type="checkbox" id="primary1" >
                                    <label for="primary1"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/8.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Jhon Deo</td>
                                    <td>+555222555</td>
                                    <td>
                                      <span class="badge-dot">
                                        <i class="bg-success"></i> completed
                                      </span>
                                    </td>
                                    <td>
                                            <div class="progress shadow" style="height: 4px;">
                                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                                       </div>
                                    </td>
                                     
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      

                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary2" >
                                    <label for="primary2"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/1.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Sonya Frost</td>
                                    <td>+555444555</td>
                                    <td>
                                          <span class="badge-dot">
                                            <i class="bg-info"></i> on schedule
                                          </span>
                                        </td>
                                        <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                                           </div>
                                        </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary3" >
                                    <label for="primary3"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/2.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Sara Jen</td>
                                    <td>+555222333</td>
                                   <td>
                                          <span class="badge-dot">
                                            <i class="bg-success"></i> completed
                                          </span>
                                        </td>
                                        <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                                           </div>
                                        </td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary5" >
                                    <label for="primary5"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/7.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Colleen Hurst</td>
                                    <td>+555222444</td>
                                    <td>
                                      <span class="badge-dot">
                                        <i class="bg-info"></i> on schedule
                                      </span>
                                    </td>
                                    <td>
                                     <div class="progress shadow" style="height: 4px;">
                                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                                       </div>
                                            </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary4" >
                                    <label for="primary4"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/4.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Herrod Chandler</td>
                                    <td>+555222888</td>
                                    <td>
                                          <span class="badge-dot">
                                            <i class="bg-warning"></i> delayed
                                          </span>
                                        </td>

                                        <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                                           </div>
                                        </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>

            </div>
          </div>
        </div>
      </div><!-- End Row-->
     </div>
 </div>
@endsection
@extends('main.footer')
