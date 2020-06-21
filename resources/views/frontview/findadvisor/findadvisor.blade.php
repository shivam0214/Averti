@extends('layouts.frontapp')

@section('content') 
<section class="wizardform">
<div class="mid">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 offset-lg-1">
        <div class="row shadow">
          <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 p-0">
            <div class="img">
                <div class="pics"></div>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12 col-md-8 col-lg-7 col-xs-12 form-box p-0">
            <form role="form" action="{{route('finadvisor')}}" method="post" class="f1">
              <div class="backloader"><div class="loader"></div></div>
                <div class="advisorfmmsg"></div>
                  @csrf
                  <fieldset>
                    <div class="icongol"><img src="{{asset('assets/frontassets/images/banner/hello.png')}}"></div>
                      <h4>Nice to meet you!</h4>
                      <h5>What's your name?</h5>
                        <div class="form-group">
                      <input type="text" name="name" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                    </div>
                    <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                    </div>
                  </fieldset>
                  <fieldset>
                  <div class="icongol"><img src="{{asset('assets/frontassets/images/banner/location.png')}}"></div>
                  <h4>Where are you located?</h4>
                  <h5>Zoe has great advisors all across the country.</h5>
                  <div class="form-group">

                  <input type="text" name="located" placeholder="10583" class="f1-email form-control" id="located">
                  </div>


                  <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                  </div>
                  </fieldset>

                  <fieldset>
                  <div class="icongol"><img src="{{asset('assets/frontassets/images/banner/birthday-cake.png')}}"></div>
                  <h4>How old are you?</h4>
                  <h5>Each stage of your life is financially unique.</h5>
                  <div id="affected" name="age">

                  <input type="radio" name="age" value="29" title="Under 30">
                  <input type="radio" name="age" value="30" title="30s">
                  <input type="radio" name="age" value="40" title="40s">
                  <input type="radio" name="age" value="50" title="50s">
                  <input type="radio" name="age" value="60" title="60s">
                  <input type="radio" name="age" value="70" title="70+">
                  </div>
                  <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                  </div>
                  </fieldset>

                <fieldset>
                <div class="icongol"><img src="{{asset('assets/frontassets/images/banner/wedding.png')}}"></div>
                <h4>Are you married?</h4>
                <h5>Your marital status helps us understand the complexity of your finances</h5>
                <div id="affected1" name="status">

                <input type="radio" name="status" value="Married" title="Married">
                <input type="radio" name="status" value="Divorced" title="Divorced">
                <input type="radio" name="status" value="Single" title="Single">
                <input type="radio" name="status" value="Separated" title="Separated">
                <input type="radio" name="status" value="Prefer not to say" title="Prefer not to say">
                </div>
                <div class="f1-buttons">
                <button type="button" class="btn btn-previous">Previous</button>
                <button type="button" class="btn btn-next">Next</button>
                </div>
                </fieldset>


<fieldset>
<div class="icongol"><img src="{{asset('assets/frontassets/images/banner/mission-accomplished.png')}}"></div>
<h4>What would you like to accomplish (Max 3)</h4>
<h5>Your needs are matched with the advisor's specialties.</h5>
<div id="affected2" name="Whatwouldyoulike">

<input type="radio" name="Whatwouldyoulike" title="Home Purchase">
<input type="radio" name="Whatwouldyoulike" title="Manage New Wealth">
<input type="radio" name="Whatwouldyoulike" title="Pay Down Debt">
<input type="radio" name="Whatwouldyoulike" title="Plan for Retirement">
<input type="radio" name="Whatwouldyoulike" title="Improve  Investment Strategy">
<input type="radio" name="Whatwouldyoulike" title="Plan for College Savings">
<input type="radio" name="Whatwouldyoulike" title="Employee stock options">
<input type="radio" name="Whatwouldyoulike" title="Family Planning">
<input type="radio" name="Whatwouldyoulike" title="Optimize Tax Strategy">
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>
<div class="icongol"><img src="{{asset('assets/frontassets/images/banner/work.png')}}"></div>
<h4>What's your occupation?</h4>
<h5>Some fields require unique financial advice.</h5>
<div class="form-group">

<input type="text" name="occupation" placeholder="What's your occupation?" class="f1-first-name form-control" id="f1-first-name">
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>


<fieldset>
<div class="icongol"><img src="{{asset('assets/frontassets/images/banner/dolar.png')}}"></div>
<h4>What is your household income?</h4>
<h5>This enables an advisor to create a more customized solution for you.</h5>
<div class="form-group">
<div class="row">
    <div class="col-sm-12">
      <div id="slider-range"></div>
    </div>
  </div>
  <div class="row slider-labels">
    <div class="col-lg-6 text-left caption">
      <strong>Min:</strong> <span id="slider-range-value1"></span>
    </div>
    <div class="col-lg-6 text-right caption">
      <strong>Max:</strong> <span id="slider-range-value2"></span>
    </div>
  </div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>
<fieldset>
<div class="icongol"><img src="{{asset('assets/frontassets/images/banner/money.png')}}"></div>
<h4>What are your total savings?</h4>
<h5>Include retirement accounts, investments, and cash. This gives us an idea of your financial situation.</h5>
<div class="form-group">
<div class="row">
    <div class="col-sm-12">
      <div id="slider-range1"></div>
    </div>
  </div>
  <div class="row slider-labels">
    <div class="col-lg-6 text-left caption">
      <strong>Min:</strong> <span id="slider-range-value3"></span>
    </div>
    <div class="col-lg-6 text-right caption">
      <strong>Max:</strong> <span id="slider-range-value4"></span>
    </div>
  </div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>

<fieldset>

<h4>Almost there! Is this you?</h4>
<div class="form-group">
<div class="myname">Ajad Rawat</div>
<div class="myinfo">
<ul>
<li><div class="circleicon"><img src="{{asset('assets/frontassets/images/banner/location.png')}}">20130</div></li>
<li><div class="circleicon"><img src="{{asset('assets/frontassets/images/banner/birthday-cake.png')}}">Under 30</div></li>
<li><div class="circleicon"><img src="{{asset('assets/frontassets/images/banner/work.png')}}">Occupation</div></li>
</ul>  
</div>
<div class="information">
<ul>
<li>Marital status<span>Single</span></li>
<li>Goals<span>Plan for Retirement</span></li>
<li>Income<span>$200k - $400k</span></li>
<li>Savings<span>$600k - $800k</span></li>
</ul>
</div>
</div>

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous</button>
<button type="button" class="btn btn-next">Next</button>
</div>
</fieldset>
<fieldset>
<div class="icongol"><img src="{{asset('assets/frontassets/images/banner/congratulation.png')}}"></div>
<h4>As, we've found three great advisor matches for you!</h4>
<h5>Your information is confidential and protected.</h5>
<div class="form-group">
<input type="text" name="phone_no" placeholder="Phone Number" class="f1-email form-control" id="located">
<input type="email" name="email" placeholder="Email Address" class="f1-email form-control" id="located">
</div>


<div class="f1-buttons">

<button type="button" class="btn btn-previous">Previous</button>
<button type="submit" class="btn btn-submit">Submit</button>
</div>
</fieldset>

<div class="f1-steps">
<div class="f1-progress">
<div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
</div>
<div class="f1-step active">


</div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
<div class="f1-step"></div>
</div>
</div>
</form>
</div>
 </div>
</div>
 </div>
</div>
</div>
</section>

	
	<!-- form section ending here -->

	<!-- newslettar section satrt here -->
	<section class="news-letter padding-tb">
		<div class="container">
			<div class="section-header">
				<h2>Subscribe Our Newsletter Get News &amp; Updates</h2>
				<p>Intrinsicly leverage other's robust leadership skills without bricks-and-clicks technologies. Distinctively.</p>
			</div>
			<div class="section-wrapper">
				<div class="recent-news">
					<input type="email" name="email" placeholder="Enter Your Email">
					<button type="submit" class="btn">Subscribe Now</button>
				</div>
			</div>
		</div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
$('#checkidmsg').hide();
$("#checkemail").change(function(){
$('#checkidmsg').text('').hide();
var em = $(this).val();
$.ajax({
url:'/checkemail',
type:'GET',
data: { 
   email:em
  },
success:function(re){
if(re.status==0){
$('#checkidmsg').text(re.msg).show();
}
}
})
});


$("#advisorfm").submit(function(e){
	e.preventDefault();
    var inputData = new FormData($(this)[0]);
    $.ajax({
            url:'{{route("finadvisor")}}',
            type:'POST',
            dataType: 'json',
            data:inputData,
            processData:false,
            contentType:false,
             beforeSend: function () {
                $('.backloader').show();
              },
              complete: function () {
                $('.backloader').hide();
              },
            success: function (response) {
              $('.advisorfmmsg').text(response.msg);
             
            }
      });
})


</script>

<style>
.advisorfmmsg{background: #4caf50;
    padding: 12px 0px;
    color: #fff;
    display: none;}
.loader {
border: 6px solid #f3f3f3;
    border-radius: 50%;
    border-top: 6px solid #001640;
    border-bottom: 6px solid #001640;
    width: 50px;
    height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.backloader{
        background: #ffffffa3;
    position: absolute;
    width: 93%;
    z-index: 9;
    height: 100%;
    display:none;
    text-align: -webkit-center;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#checkidmsg{
	padding: 0px 11px;
    background: #ff0000a8;
    color: #fff;
}
</style>

@endsection('content')
