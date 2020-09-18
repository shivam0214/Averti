@extends('main.header')
@section('content')

<div class='container-fluid'>
        <div class='row'>
             <div class="col-md-6 offset-3">
        <div class="card">
           <div class="card-body">
           <div class="card-title">
            Personal Information  
         </div>
           <hr>
            <form  method="POST" action="{{ route('profile') }}">
           <div class="form-group">
            <label for="input-6">ID Proof</label>
            <input type="text" class="form-control form-control" id="input-6" placeholder="ID">
           </div>
            <div class="form-group">
          <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-info text-white">
                                    <i class="fa fa-picture-o"></i> Upload Image
                                </a>
                            </span>
                        </div>
                        <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                    </div> 
                  </div>


           </form>
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary px-5"> Save</button>
          </div>
          
         </div>
      </div>
   </div>
 </div>	
@endsection
@extends('main.footer')
