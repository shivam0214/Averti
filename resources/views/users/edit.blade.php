@extends('main.header')
@section('content')
<div class="card-authentication2 mx-auto my-3">
 <div class="card-group">
     <div class="card mb-0">
         <div class="card-body">
             <div class="card-content p-3">
                 <div class="text-center">
                      <img src="{{asset('assets/image/averti1.jpg')}}" alt="logo icon" height="50px">
                  </div>
              <div class="card-title text-uppercase text-center py-3">Add User</div>
    
        <form  id="adduserform" method="POST" action="{{ route('update') }}">   
        @csrf
        <div class="container text-primary ">
        @if($message=Session::get('message'))
                <p>{{$message}}</p>
                @endif

            <div class="row">
            <input type="hidden" value="{{$user->uuid}}" id="uuid" name="uuid" class="form-control" placeholder="uuid">
                    
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="FirstName" class="sr-only">FIRST NAME</label>
                            <input type="text" value="{{$user->name}}" id="FirstName" name="name" class="form-control" placeholder=" First Name">
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="middle_name" class="sr-only">MIDDLE NAME</label>
                            <input type="text" value="{{$user->middle_name}}" id="middle_name" name="middle_name" class="form-control" placeholder=" Middle Name">
                        </div>
                    </div>
            </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="LastName" class="sr-only">LAST NAME</label>
                            <input type="text" value="{{$user->last_name}}" id="last_name" name="last_name" class="form-control" placeholder=" Last Name" >
                        </div>
                    </div>
                </div>  
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="email" class="sr-only">Email ID</label>
                        <input type="text" value="{{$user->email}}" id="email" name="email" class="form-control" placeholder="Email ID" >          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                        <label for="date_of_birth" class="sr-only">DOB</label>
                        <input type="date" value="{{$user->userdata['date_of_birth']}}" id="date_of_birth" value="{{$user->userdata['date_of_birth']}}" name="date_of_birth" class="form-control" placeholder="DOB">
                        
                        </div>
                    </div>
                </div>    
            </div>      
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                        <label for="age" class="sr-only">AGE</label>
                        <input type="number" id="age" name="age" value="{{$user->userdata['age']}}" class="form-control" placeholder="Age" >
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="disease" class="sr-only">DISEASE</label>
                            <input type="text" value="{{$user->userdata['disease']}}" id="disease" name="disease" class="form-control" placeholder="Disease">
                        </div>
                    </div>                 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="bloodgroup" class="sr-only">BLOOD GROUP</label>
                            <input type="text" value="{{$user->userdata['bloodgroup']}}" id="bloodgroup" name="bloodgroup" class="form-control" placeholder="Blood Group">
                        </div>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="homeno" class="sr-only">HOME NUMBER</label>
                            <input type="number" value="{{$user->userdata['home_no']}}" id="home_no" name="home_no" class="form-control" placeholder="Home Number">
                        </div>
                   </div>                 
                </div>
            </div>            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="Phone" class="sr-only">PHONE</label>
                            <input type="number" value="{{$user->userdata['phone_no']}}" id="Phone" name="phone_no" class="form-control" placeholder="Phone Number" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="mobile" class="sr-only">MOBILE</label>
                            <input type="number" value="{{$user->userdata['mobile_num']}}" id="mob" name="mobile_num" class="form-control" placeholder="Mobile Number">
                        </div>
                   </div>                 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">                   
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="address" class="sr-only">ADDRESS</label>
                            <input type="text" value="{{$user->userdata['address']}}" id="address" name="address" class="form-control" placeholder="Address" >
                            
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">                   
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="city" class="sr-only">City</label>
                            <input type="text" value="{{$user->userdata['city']}}" id="city" name="city" class="form-control" placeholder="City" >
                            
                        </div>
                    </div>    
                </div>    
            </div>
            <div class="row">
                <div class="col-md-6">                   
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="state" class="sr-only">STATE</label>
                            <input type="text" value="{{$user->userdata['state']}}" id="state" name="state"  class="form-control" placeholder="State">
                            
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">                   
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="country" class="sr-only">Country</label>
                            <input type="text" value="{{$user->userdata['country']}}" id="country" name="country"  class="form-control" placeholder="Country"  >
                            
                        </div>
                    </div>    
                </div>    
            </div>
            <div class="row">
                <div class="col-md-6">                   
                    <div class="form-group">
                        <div class="position-relative">
                            <label for="pincode" class="sr-only">PINCODE</label>
                            <input type="text"  value="{{$user->userdata['zipcode']}}" id="zipcode" name="zipcode" class="form-control" placeholder="Pin Code">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail2" class="form-control" type="text" value="{{$user->userdata['profile_image']}}" name="profile_image">
                            
                        </div>
                        <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                    </div>
                </div>                    
            </div>    
            <div class="row">
                <div class="col-md-6">  
                    <div class="form-group">
                        <div class="position-relative">
                        <label for="smoker" class="">SMOKERS</label>                 
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="smokers" class="custom-control-input" id="customRadio1" value="{{$user->userdata['smokers']}}">
                            <label class="custom-control-label" for="customRadio1">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="smokers" class="custom-control-input" id="customRadio2" value="{{$user->userdata['smokers']}}">
                            <label class="custom-control-label" for="customRadio2">No</label>
                        </div>
                        
                        </div>
                    </div>
                </div> 
                <div class="col-md-6"> 
                <label class="label">Permissions</label>
                </div>  
            </div>
        </div> 
        <button type="submit" class="btn btn-primary waves-effect waves-light"><b>Update</b></button>
                 
        </form>
            </div>
        </div>
    </div>
</div>

@endsection	
@extends('main.footer')