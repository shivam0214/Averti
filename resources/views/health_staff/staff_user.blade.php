@extends('layouts.app')
<style>
  .mainthubclient {
    position: relative;
    width: 100%;
    display: inline-block;
    border: 0;
    padding: 0 10px 20px;
    border-radius: 6px;
    margin-bottom:15px;
}
.thumbnaildiv {
    position: relative;
    width: 100%;
    display: inline-block;
    border: #2f374c 1px solid;
    padding: 0 0 20px;
    border-radius: 6px;
    margin-bottom: 15px;
}

.mainthubclient .userprogfilepic {
    width: 100%;
    display: inline-block;
    padding: 0px 20px 0;
    margin-bottom:20px;
}

.mainthubclient .userprogfilepic .pic {
    width: 90px;
    display: inline-block;
    position: absolute;
    top: -15px;
}

.mainthubclient .userprogfilepic .name {
    display: inline-block;
    margin-left: 15px;
    font-size: 20px;
    padding: 10px 0  0 90px;
}

.mainthubclient .userprogfilepic .name span {
    display: block;
}

.userdiscription {
    background: #2f374c;
    padding: 10px 20px;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top:2px;
}

.userdiscription::before {content: "";position: absolute;left: -5px;height: 100%;width: 5px;background: #2f374c;top: 0;}

.userdiscription::after {
    content: "";
    position: absolute;
    right: -5px;
    height: 100%;
    width: 5px;
    background: #2f374c;
    top: 0;
}
.illness {
    font-size: 17px;
    width: 100%;
    display: inline-block;
}

.illness span {
    float: right;
    font-size: 15px;
}

.summewry {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%;
    font-size: 20px;
}

.summewry p {
    margin-bottom: 0px;
}
.flag {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #f00;
}

.userslist {
    margin: 50px 0 0px;
    padding: 0px 30px;
}
  </style>
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Staff</h3>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
<div class="userslist">
	<div class="row">
    @foreach ($value as $record)
    <div class="col-sm-4">
        <div class="mainthubclient">
        <div class="thumbnaildiv">
        <div class="flag"><i class="fa fa-flag"></i></div>
        <div class="userprogfilepic">

        <div class="pic"><img src="<?php echo (($record['usermeta_staff_booking']['profile_image'])!= NULL) ? url($record['usermeta_staff_booking']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px" class="rounded-circle img-fluid">
            </div>
        <div class="name"><a href="{{ route('staff_detail',['id'=>$record->staff_id]) }}">{{$record['user_staff_booking']['name']}}</a><span>53F</span></div>
        </div>
        <input type="hidden" value="{{$record['user_staff_booking']['id']}}">

        @foreach ($value as $user_data)

        <div class="userdiscription">
            <div class="illness">{{$user_data['disease_list']['disease']}} <span class="posttime"> @ h Ago</span></div>
            <div class="summewry"><p>{{$user_data['description']}}</p></div> 
        </div>
        @endforeach

        </div>
        </div>
    </div>
    @endforeach
        
  </div>		  
</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
@endsection
