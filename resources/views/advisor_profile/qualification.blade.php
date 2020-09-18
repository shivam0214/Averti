@extends('main.header')
@section('content')
<div class='container-fluid'>
        <div class='row'>
             <div class="col-md-6 offset-3">
        <div class="card">
           <div class="card-body">
           <div class="card-title">
            Skills  
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
           
           <div class="form-group">
            <button type="submit" class="btn btn-info px-5"> edit</button>
          </div>
          </form>
         </div>
         </div>
      </div>
   </div>
</div>
<div class='container-fluid'>
        <div class='row'>
             <div class="col-md-6 offset-3">
        <div class="card">
           <div class="card-body">
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
           
           <div class="form-group">
            <button type="submit" class="btn btn-info px-5"> edit</button>
          </div>
          </form>
         </div>
         </div>
      </div>
   </div>
 </div>	


@endsection
@extends('main.footer')
