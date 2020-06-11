@extends('main.header')
@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Mail Compose</h4>
	   </div>
	   </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
           <div class="card-body">

        <div class="row">
        
            <!-- Left sidebar -->
            <div class="col-lg-3 col-md-4">
                <a href="{{route('new_mail')}}" class="btn btn-danger btn-block">Return to inbox</a>
                <div class="card mt-3 shadow-none">
                        <div class="list-group shadow-none">
                          <a href="javascript:void();" class="list-group-item active"><i class="fa fa-inbox mr-2"></i>Inbox <b>(12)</b></a>
                          <a href="javascript:void();" class="list-group-item"><i class="fa fa-star-o mr-2"></i>Starred</a>
                          <a href="javascript:void();" class="list-group-item"><i class="fa fa-file-text-o mr-2"></i>Draft <b>(10)</b></a>
                          <a href="javascript:void();" class="list-group-item"><i class="fa fa-paper-plane-o mr-2"></i>Sent Mail</a>
                          <a href="javascript:void();" class="list-group-item"><i class="fa fa-trash-o mr-2"></i>Trash <b>(320)</b></a>
                          <a href="javascript:void();" class="list-group-item"><i class="fa fa-bookmark mr-2"></i>Important <b>(5)</b></a>
                          <a href="javascript:void();" class="list-group-item">Labels</a>
                          <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-info float-right"></span>Work</a>
                          <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-warning float-right"></span>Design</a>
                          <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-success float-right"></span>Family</a>
                          <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-secondary float-right"></span>Friends</a>
                          <a href="javascript:void();" class="list-group-item"><span class="fa fa-circle text-success float-right"></span>Office</a>
                        </div>
                </div>

                
            </div>
            <!-- End Left sidebar -->
                    
        <!-- Right Sidebar -->
        <div class="col-lg-9 col-md-8">
            
            <div class="card mt-3 shadow-none">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="To">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Cc">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Bcc">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="summernoteEditor" placeholder="Message body" style="height: 200px"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary waves-effect waves-light m-1"><i class="fa fa-floppy-o mr-1"></i> Send</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash-o mr-1"></i> Draft</button>
                            <button type="button" class="btn btn-white waves-effect waves-light m-1"><i class="fa fa-send mr-1"></i> <span>Discard</span> </button>
                        </div>
                    </form>
                </div> <!-- card body -->
             </div> <!-- card -->
           </div> <!-- end Col-9 -->
         </div><!-- End row -->
      </div>
    </div>
  </div>
 
@endsection
@extends('main.footer')
