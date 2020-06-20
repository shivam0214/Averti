@extends('layouts.app')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">General Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">{{auth::user()['name']}}'s Profile</li>

							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

      <section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  	<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
								
						</div>
						<!-- /.box-header -->
						<form role="form" method="post" action="{{route('update_profile')}}">
                  @csrf
                  <input type="hidden" class="form-control" name="uuid" value="{{Auth::user()['uuid']}}">

                  {!! Form::hidden('user_id', $user->id) !!}
                  
							<div class="box-body">
								<div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Select Profile Pic</label>
                                 <label class="file">
                                    <input type="file" id="file">
                                 </label>
								      </div>
								   </div>
                         </div>  
                         <div class="row">
                           <div class="col-md-6">
                        
									<div class="form-group">
									  <label>First Name</label>
									  <input type="text" class="form-control" name="name" value="{{Auth::user()['name']}}" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Last Name</label>
									  <input type="text" class="form-control" name="lastname" value="{{Auth::user()['last_name']}}" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label >E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{Auth::user()['email']}}">
									</div>
								  </div>
								  <div class="col-md-6">

									<div class="form-group">
									  <label >Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone" name="phone_no" value="{{$user['single']['phone_no']}}">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Address</label>
									  <input type="text" class="form-control" placeholder="Address" name="address" value="{{$user['single']['address']}}">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >City</label>
									  <input type="text" class="form-control" placeholder="City" name="city" value="{{$user['single']['city']}}">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >State</label>
									  <input type="text" class="form-control" placeholder="State" name="state" value="{{$user['single']['state']}}">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Country</label>
									  <input type="text" class="form-control" placeholder="Country" name="country" value="{{$user['single']['country']}}">
									</div>
								  </div>
                          <div class="col-md-6">
									<div class="form-group">
									  <label >Zip code</label>
									  <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" value="{{$user['single']['zipcode']}}">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information</h4>
								<hr class="my-15">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                              <label>Lincense Number</label>
                              <input type="text" class="form-control" name="lincensenumber" placeholder="Lincense Number" value="{{$question_data->lincensenumber}}">
                              </div>
                           </div>  
                           <div class="col-md-6">
                              <div class="form-group">
                              <label>Did someone ref you to us?</label>
                              <input type="text" class="form-control" name="ref" value="{{$question_data->ref}}" placeholder="Did someone ref you to us?">
                              </div>	   
                        </div>   
                        </div>

								<div class="row">
								   <div class="col-md-12">
                              <div class="form-group">
                                 <lable>How Did You Hear About Us?</lable>
                                 <select name="How_Did" id="SelectLm"  class="form-control-sm form-control">
                                                <option>How Did You Hear About Us?</option>
                                                <option value="1" @if($question_data->How_Did=='1')selected @endif>Option #1</option>
                                                <option value="2" @if($question_data->How_Did=='2')selected @endif>Option #2</option>
                                                <option value="3" @if($question_data->How_Did=='3')selected @endif>Option #3</option>
                                                <option value="4" @if($question_data->How_Did=='4')selected @endif>Option #4</option>
                                                <option value="5" @if($question_data->How_Did=='5')selected @endif>Option #5</option>
                                             </select>
                              </div>
									</div>
                        </div>
   
                        <div class="row">
                           <div class="col-md-12">
                                    <lable>What database program do you currently Uses</lable>
												<select name="What_database" id="select_data" value="{{$question_data->What_database}}" class="form-control-sm form-control">
                                       <option>What database program do you currently Uses</option>
                                       <option value="1"@if($question_data->What_database=='1')selected @endif>Option #1</option>
                                       <option value="2"@if($question_data->What_database=='2')selected @endif>Option #2</option>
                                       <option value="3"@if($question_data->What_database=='3')selected @endif>Option #3</option>
                                       <option value="4"@if($question_data->What_database=='4')selected @endif>Option #4</option>
                                       <option value="5"@if($question_data->What_database=='5')selected @endif>Option #5</option>
												</select>
											</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
            <div class="col-lg-6 col-12">
					  <div class="box">
						<!-- /.box-header -->
                  <form role="form" method="post" action="{{route('update_data')}}">
                  @csrf
                  {!! Form::hidden('user_id', $user->id) !!}

                  <input type="hidden" class="form-control" name="id" value="{{Auth::user()['id']}}">

               							<div class="box-body">
								<h4 class="box-title text-info">About</h4>
								<hr class="my-15">
								<div class="row">
                        <h4>What?</h4>
										<p class="colorchange">Are you looking for holistic approach to life and money management?</p>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="lookingforholastic" @if($question_data->lookingforholastic=='1')checked @endif class="checkbox-custom" id="noti_8" value="1"  type="radio">
														<label class="checkbox-custom-label" for="noti_8">Yes</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="lookingforholastic" @if($question_data->lookingforholastic=='0')checked @endif class="checkbox-custom" id="noti_9" value="0" type="radio">
														<label class="checkbox-custom-label" for="noti_9">No</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
									<div class="form-group">
                           <h4>Where?</h4>
										<p class="colorchange">What services are you most interested in receiving help with?</p>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="{{$question_data->mostinterested}}" class="checkbox-custom" id="noti_11" value="Estate Planning" type="checkbox">
														<label class="checkbox-custom-label" for="noti_11">Estate Planning</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="{{$question_data->mostinterested}}"  class="checkbox-custom" id="noti_12" value="Life And Money Management" type="checkbox">
														<label class="checkbox-custom-label" for="noti_12">Life And Money Management</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="{{$question_data->mostinterested}}" class="checkbox-custom" id="noti_13" value="Cash Flow / Budgeting" type="checkbox">
														<label class="checkbox-custom-label" for="noti_13">Cash Flow / Budgeting</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="mostinterested" value="{{$question_data->mostinterested}}" class="checkbox-custom" id="noti_14" value="All Of The Above" type="checkbox">
														<label class="checkbox-custom-label" for="noti_14">All Of The Above</label>
													</div>
												</div>
											</div>
										</div>
																	</div>
								<div class="row">
								<p class="colorchange">Where are you now? Status?</p>
										<div class="form-group">
											<div class="row">
                                 <div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Single" @if($question_data->status=='Single')checked @endif id="radio1" type="radio">
														<label for="radio1">Single</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Married" @if($question_data->status=='Married')checked @endif id="radio2" type="radio">
														<label for="radio2">Married</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Widow" @if($question_data->status=='Widow')checked @endif id="radio3" type="radio">
														<label for="radio3">Widow</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="rdio rdio-primary radio-inline">
														<input name="status" value="Divorce" @if($question_data->status=='Divorce')checked @endif id="radio4" type="radio">
														<label for="radio4">Divorce</label>
													</div>
												</div>
											</div>
										</div>
								   </div>
                        </div>   
								<h4>ASSETS</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="assets" id="assets" class="form-control-sm form-control">
														<option value="">Assets</option>
														<option value="0-99,999" @if($question_data->assets=='0-99,999')selected @endif>0-99,999</option>
														<option value="100,000-250,000" @if($question_data->assets=='100,000-250,000')selected @endif>100,000-250,000</option>
														<option value="250,001-500,000" @if($question_data->assets=='250,001-500,000')selected @endif>250,001-500,000</option>
														<option value="500,001-1,000,000" @if($question_data->assets=='500,001-1,000,000')selected @endif>500,001-1,000,000</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="age" id="age" class="form-control-sm form-control">
														<option value="">Age</option>
														<option value="21-35"@if($question_data->age=='21-35')selected @endif>21-35</option>
														<option value="36-45"@if($question_data->age=='36-45')selected @endif>36-45</option>
														<option value="46-55"@if($question_data->age=='46-55')selected @endif>46-55</option>
														<option value="56-75"@if($question_data->age=='56-75')selected @endif>56-75</option>
														<option value="75"@if($question_data->age=='75')selected @endif>75+</opton>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="life_happiness" id="Select" class="form-control-sm form-control">
														<option value="">Life Happiness</option>
														<option value="Over the moon"@if($question_data->life_happiness=='Over the moon')selected @endif>Over the moon</option>
														<option value="Very Happy"@if($question_data->life_happiness=='Very Happy')selected @endif>Very Happy</option>
														<option value="UnHappy"@if($question_data->life_happiness=='UnHappy')selected @endif>UnHappy</option>
														<option value="Depressed"@if($question_data->life_happiness=='Depressed')selected @endif>Depressed</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="financial" id="Select" class="form-control-sm form-control">
														<option value="Financial Awareness" @if($question_data->financial=='Financial Awareness')selected @endif>Financial Awareness</option>
														<option value="Financially Confident" @if($question_data->financial=='Financially Confident')selected @endif>Financially Confident</option>
														<option value="Financially Aware" @if($question_data->financial=='Financially Aware')selected @endif>Financially Aware</option>
														<option value="Financially Chanllenged" @if($question_data->financial=='Financially Chanllenged')selected @endif>Financially Chanllenged</option>
													</select>
												</div>
											</div>
                                 <div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="retirement_goal" id="Select" class="form-control-sm form-control">
														<option value="">Retirement Goal</option>
														<option value="0-5"@if($question_data->retirement_goal=='0-5')selected @endif>0-5</option>
														<option value="6-10"@if($question_data->retirement_goal=='6-10')selected @endif>6-10</option>
														<option value="11-15"@if($question_data->retirement_goal=='11-15')selected @endif>11-15</option>
													</select>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<select name="moneymeaning" id="Select" class="form-control-sm form-control">
														<option value="">Money Meaning</option>
														<option value="Freedom" @if($question_data->moneymeaning=='Freedom')selected @endif>Freedom</option>
														<option value="Control" @if($question_data->moneymeaning=='Control')selected @endif>Control</option>
														<option value="Security" @if($question_data->moneymeaning=='Security')selected @endif>Security</option>
														<option value="All the above" @if($question_data->moneymeaning=='All the above')selected @endif>All the above</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<select name="desisionmaker" id="Select" class="form-control-sm form-control">
														<option value="0">Financial Desision Maker</option>
														<option value="Me"@if($question_data->desisionmaker=='Me')selected @endif >Me</option>
														<option value="Partner" @if($question_data->desisionmaker=='Partner')selected @endif>Partner</option>
														<option value="Both" @if($question_data->desisionmaker=='Both')selected @endif>Both</option>
														<option value="Outside Source" @if($question_data->desisionmaker=='Outside Source')selected @endif>Outside Source</option>
													</select>
												</div>
											</div>

                                 <h4>Risk</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_15" value="Aggressive" @if($question_data->risk=='Aggressive')checked @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_15">Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_16" value="Moderately Aggressive" @if($question_data->risk=='Moderately')selected @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_16">Moderately Aggressive</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk"@if($question_data->risk=='Moderate')selected @endif class="checkbox-custom" id="noti_17" value="Moderate" type="checkbox">
														<label class="checkbox-custom-label" for="noti_17">Moderate</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="risk" class="checkbox-custom" id="noti_18" value="Conservative"@if($question_data->risk=='Conservative Source')selected @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_18">Conservative</label>
													</div>
												</div>
											</div>
										</div>
										
                              <h4>When</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" @if($question_data->when=='ASAP')checked @endif class="checkbox-custom" id="noti_19" value="ASAP" type="checkbox">
														<label class="checkbox-custom-label" for="noti_19">ASAP</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_20" value="Week from Now" @if($question_data->when=='Week from Now')checked @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_20">Week from Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_21" value="Month From Now" @if($question_data->when=='Month From Now')checked @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_21">Month From Now</label>
													</div>
												</div>
												<div class="col-lg-6 col-mg-6 col-xs-12 col-sm-12">
													<div class="custom-checkbox">
														<input name="when" class="checkbox-custom" id="noti_22" value="With six Months" @if($question_data->when=='With six Months')checked @endif type="checkbox">
														<label class="checkbox-custom-label" for="noti_22">With six Months</label>
													</div>
												</div>
											</div>
										</div>
									
                              <h4>Why?</h4>
										<div class="form-group">
											<p class="colorchange">What type of planning do you want to get started ?</p>
											<div class="row">
												<div class="col-sm-12">
													<select name="planning" id="Select" class="form-control-sm form-control">
														<option value="0">Select Option</option>
														<option value="Financial Planning" @if($question_data->planning=='Financial Planning')selected @endif>Financial Planning</option>
														<option value="Life Management"@if($question_data->planning=='Life Management')selected @endif>Life Management</option>
														<option value="Income Planning"@if($question_data->planning=='Income Planning')selected @endif>Income Planning</option>
														<option value="Investments"@if($question_data->planning=='Investments')selected @endif>Investments</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<p class="colorchange">How much do you have allocated for these services?</p>
											<div class="row">
												<div class="col-sm-12">
													<select name="services" id="Select" class="form-control-sm form-control">
														<option value="0">Select Option</option>
														<option value="2500-5000" @if($question_data->services=='2500-5000')selected @endif>2500-5000</option>
														<option value="5001-7000" @if($question_data->services=='5001-7000')selected @endif>5001-7000</option>
														<option value="7001-10000" @if($question_data->services=='7001-10000')selected @endif>7001-10000</option>
														<option value="10000" @if($question_data->services=='10000')selected @endif>10000+</option>
													</select>
												</div>
											</div>
										</div>
										
							<!-- /.box-body -->
							<div class="box-footer text-right">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
 
         </div>   
            </section>
		<!-- /.content -->
	  </div>
  </div>
            
@endsection

