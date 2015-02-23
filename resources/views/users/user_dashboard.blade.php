@extends('layouts.master')

@section('content')
	<body>
		<div class="container fluid" style="width:100%; margin:0 auto; padding:0; margin-top:30px; min-height:100% ">
			<div class="row" style="width:100%; ">
		    
		    <div class="col-md-3" style="height:100vh; border-right:1px solid #ccc;"> 
				<div class="row">
					<h2 align="center"><span style="border-bottom:1px solid #666;">{{ strtoupper($user->first_name) }} {{ strtoupper($user->last_name) }}</span></h2>
					<h4 align="center">{{ $user->title }}</h4>
				</div>		      
		      	<div class="panel">
		        	<div class="panel-body">
						<div class="row">    
			            <br>
			            <div class="col-md-12 col-sm-12" align="center">
			              <div class="row">
			              	<div class="col-md-12 col-lg-12">
			              		<img src="{{ url('images/profile_pic.jpg') }}" style="width:100px;height:100px" class="img-circle">
			              	</div>
			              	<br/><br/><br/>
			                <div class="col-xs-12 col-md-12 col-lg-12">
			                  <h3>{{ $user->first_name }}</h3>
			                  <ul class="list-inline">
			                  	<li>Joined Frostfeed <a href="#"></a></li></ul>
			                  </div>
			                <div class="col-xs-3"></div>
			              </div>
			              <br><br>
			            </div>
			          </div>
			          <hr>
		        	</div>
		      </div>
		                                                                                       
			                                                
		                                                      
		   	</div><!--/col-4-->
		   	<div class="col-md-6" >
		   		<div class="row" style="padding:10px 20px">
		   			<h3>Hey There ! Good to see u back ! </h3>
		   			<h4> <a href="{{ url('post/create') }}" style="text-decoration:underline">write posts</a> or check out <a href="{{ url('post') }}"  style="text-decoration:underline">feeds</a> to enjoy your day ! </h4>
		   		</div>
		   	</div>
		   	<div class="col-md-3" style="border-left:1px solid #ccc; min-height:100vh;">
		   		<div class="row" style="padding:5px 15px; ">
		   			<h4><a href=""><i class="glyphicon glyphicon-chevron-left" style="font-size:0.7em; margin-right:10px;"></i> Messages </h4>
		   		</div>
		   		<div class="row">
		   			<ul class="message-list">
		   			@foreach($messages as $message)
		   			<li style="overflow:auto">
		   			<div class="col-md-3">
		   				<img src="{{ url('images/profile_pic.jpg') }}" style="width:50px;height:50px; margin:8px auto;" class="img-circle">
		   			</div>
		   			<div class="col-md-9">
		   				<h5>{{ $message->name }}</h5>
		   				<p> {{ $message->message }} </p>
		   			</div>
		   			</li>
		   			@endforeach
		   			</ul>
		   		</div>
		   	</div>
		  </div>
	</div>
@stop