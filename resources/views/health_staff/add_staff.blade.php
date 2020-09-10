@extends('food.food_layout')

@section('sub_content') 
			<div class="box-header with-border">
			  <h4 class="box-title">Add Staff Details</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			    <div class="row">	
                    <div class="col">
                        <form  id="adduserform" method="POST" action="{{route('add_staff_details')}}">   
                            @csrf
                            <div class="container">                        
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="firstname" class="sr-only">FIRST NAME</label>
                                            <input type="text" id="firstname" name="name" class="form-control" placeholder=" First Name">
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="middle_name" class="sr-only">MIDDLE NAME</label>
                                            <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder=" Middle Name">
                                        </div>
                                    </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="last_name" class="sr-only">LAST NAME</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder=" Last Name" >
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="email" class="sr-only">Email ID</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email ID" >
                                        @if($status=Session::get('status'))
                                            <p>{{$status}}</p>
                                            @endif          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                        <label for="date_of_birth" class="sr-only">DOB</label>
                                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="DOB">
                                        
                                        </div>
                                    </div>
                                </div>    
                            </div>      
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                        <label for="age" class="sr-only">AGE</label>
                                        <input type="number" id="age" name="age" class="form-control" placeholder="Age" >
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="experience" class="sr-only">Experience</label>
                                            <input type="text" id="experience" name="experience" class="form-control" placeholder="Experience" required>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="specialization" class="sr-only">Specialization</label>
                                            <input type="text" id="specialization" name="specialization" class="form-control" placeholder="Specialization">
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="designation" class="sr-only">Designation</label>
                                            <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation">
                                        </div>
                                </div>                 
                                </div>
                            </div>            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="phone_no" class="sr-only">PHONE</label>
                                            <input type="text" id="phone_no" name="phone_no" class="form-control" placeholder="Phone Number" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="mobile_num" class="sr-only">MOBILE</label>
                                            <input type="text" id="mob" name="mobile_num" class="form-control" placeholder="Mobile Number">
                                        </div>
                                </div>                 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="address" class="sr-only">ADDRESS</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Address" >
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="city" class="sr-only">City</label>
                                            <input type="text" id="city" name="city" class="form-control" placeholder="City" >
                                            
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="state" class="sr-only">STATE</label>
                                            <input type="text" id="state" name="state"  class="form-control" placeholder="State">
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="country" class="sr-only">Country</label>
                                            <input type="text" id="country" name="country"  class="form-control" placeholder="Country"  >
                                            
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="pincode" class="sr-only">PINCODE</label>
                                            <input type="text" id="pincode" name="zipcode" class="form-control" placeholder="Pin Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                   
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="disease" class="sr-only">Disease</label>
                                            <input type="text" id="disease" name="disease" class="form-control" value="" placeholder="Fever|Cough|Headache">
                                        </div>
                                    </div>
                                </div>
                               
                                    
                            </div>  
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <span class="input-group-btn">
								<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
									<i class="fa fa-picture-o"></i> Choose Profile Image
								</a>							
							</span>
                            <input id="thumbnail" class="form-control" type="text" name="profile_image"  name="filepath">

						    </div>
                                </div> 
                            </div>  
                            <button type="submit" id="btn" class="btn btn-primary waves-effect waves-light"><b>Add Staff</b></button>                
                        </form>
                    </div>

<script type = "text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $('#adduserform').validate({
            rules:{
            name:{
                required:true,
            },
            last_name:{
                required:true,
            },
            email:{
                required:true,
                email:true
            },
            date_of_birth:{
                required:true,
                date:true,
            },
            age:{
                required:true,
                minlength: 2,
            },
            phone_no:{
                minlength:10,
                maxlength:12, 
                number:true,

            },
            mobile_num:{
                required:true,
                minlength:10,
                maxlength:12,
                number:true,

            },
            address:{
                required:true,
            },
            city:{
                required:true,
            },
            state:{
                required:true,
            },
            country:{
                required:true,
            },
            zipcode:{
                required:true,
            },
            profile_image:{
                required:true,
            },
           },       
           messages:{
            mobile_num:{number:"Please enter only dight",
                        required:"Please enter valid contact number",
                        
            },
            phone_no:{number:"Please enter only dight",
                        required:"Please enter valid contact number"
            },
            marks:{
                required:"Please enter correct Marks",
                maxlength:"Please enter correct Marks"
            },
            },
        });
    });
   
</script>
@endsection('sub_content') 
