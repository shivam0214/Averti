@extends('layouts.app')

@section('content') 

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		<div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			    <div class="row">	
                    <div class="col">
                        <form  id="adduserform" method="POST" action="#">   
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-primary" >
                                            @if($message=Session::get('message'))
                                        <p>{{$message}}</p>
                                        @endif</div>
                                    </div>
                    
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="FirstName" class="sr-only">FIRST NAME</label>
                                            <input type="text" id="FirstName" name="name" class="form-control" placeholder=" First Name">
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="last_Name" class="sr-only">MIDDLE NAME</label>
                                            <input type="text" id="last_Name" name="middle_name" class="form-control" placeholder=" Middle Name">
                                        </div>
                                    </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="LastName" class="sr-only">LAST NAME</label>
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
                                            <label for="disease" class="sr-only">DISEASE</label>
                                            <input type="text" id="disease" name="disease" class="form-control" placeholder="Disease">
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="education" class="form-group">Qualification Details: </label>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" id="course">
                                            <option value="">Select Course</option>
                                            <option value="1">Course1</option>
                                            <option value="2">Course2</option>
                                            <option value="3">Course3</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="marks" class="sr-only">Marks</label>
                                            <input type="text" id="marks" name="marks" class="form-control" placeholder="%">
                                        </div>
                                </div> 
                                </div> 
                            </div>
                                
                                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="bloodgroup" class="sr-only">BLOOD GROUP</label>
                                            <input type="text" id="bloodgroup" name="bloodgroup" class="form-control" placeholder="Blood Group">
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="homeno" class="sr-only">HOME NUMBER</label>
                                            <input type="text" id="home_no" name="home_no" class="form-control" placeholder="Home Number">
                                        </div>
                                </div>                 
                                </div>
                            </div>            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="Phone" class="sr-only">PHONE</label>
                                            <input type="text" id="Phone" name="phone_no" class="form-control" placeholder="Phone Number" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <label for="mobile" class="sr-only">MOBILE</label>
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
                                <div class="form-group row">
                                            <input type="file" class="form-control">
                                </div>
                                </div>
                                    
                            </div>    
                            <div class="row">
                        
                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Smooker <span class="text-danger"></span></h5>
                                                    <div class="controls">
                                                        <fieldset>
                                                            <input name="group2" type="radio" id="radio_3" value="Yes" required>
                                                            <label for="radio_3">Yes</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <input name="group2" type="radio" id="radio_4" value="No">
                                                            <label for="radio_4">No</label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                            </div>
                            
                            <button type="submit" id="btn" class="btn btn-primary waves-effect waves-light"><b>Add User</b></button>                
                        </form>
                    </div>
                </div>
            </div>
        </div>    
		</section>
	</div>
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
            bloodgroup:{
                required:true,
            },
            home_no:{
                minlength:8,
                maxlength:10,
                number:true,

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
            marks:{
                required:true,
                maxlength:2,
                number:true,
            },
            smokers:{
                required:true,
            },
           },       
           messages:{
            smokers:{required:"Please choose correct option"
            },
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
@endsection
