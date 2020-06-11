@extends('main.header')
@section('content')

<div class='container-fluid'>
        <div class='row'>
             <div class="col-md-6 offset-3">
        <div class="card">
           <div class="card-body">
           <div class="card-title">
            Profile  
         </div>
           <hr>
            <form  method="POST" action="{{ route('profile') }}">
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
                 <div class="form-group">
                  <button type="submit" class="btn btn-primary px-5"> Save</button>
                </div>
            </form>
         </div>
         </div>
      </div>
   </div>
 </div>	
@endsection
@extends('main.footer')
