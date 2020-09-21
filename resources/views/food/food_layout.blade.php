@extends('layouts.app')

@section('content') 

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
            <div class="row">
			    <div class="col-2 ">
                        @include('food.food_sidebar')         
                </div>
                <div class="col-10">
                <div class="box">
                        @yield('sub_content')
                        </div>
                </div>
            </div>
@endsection('content')
