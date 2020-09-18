
@extends('main.header')
<style>
.borderreight {
    border-right: 1px solid #d8d6d6 !important;
}
</style>
@section('content')
<div class="card-authentication3 mx-auto my-3">
 <div class="card-group">
     <div class="card mb-0">
         <div class="card-body">           
            <div class="row">
            <div class="borderreight col-md-6">
              <div class="card-content">
                  <div class="card-title text-uppercase text-center py-3">Add Role</div>
            </div>
{{Form::open(['route'=>'addroles','id'=>'myadd_roles'])}}
            {{Form::text('role', '',['class' => 'form-control','id'=>"role_name",'placeholder'=>'Role'])}}<br>
            {{Form::button('Click Me!',['id'=>'addrole','class' => 'btn btn-primary'])}}
{{ Form::close()}}
</div>
      <div class="col-md-6">
        <div class="card-content">
                  <div class="card-title text-uppercase text-center py-3">Add User</div>
            </div>
{{Form::open(['route' => 'add'])}}
            {{Form::text('role', '',['class' => 'form-control','placeholder'=>'Role'])}}
{{ Form::close() }}

</div>
</div>
        </div>
    </div>              
</div>
@endsection	

@extends('main.footer')
