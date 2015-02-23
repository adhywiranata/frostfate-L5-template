@extends('layouts.master')

@section('content')
	<body>
		<div class="container" style="margin-top:50px">
			<div class="row">
				<h2 align="center"><span style="border-bottom:1px solid #666;">{{ strtoupper($user->first_name) }} {{ strtoupper($user->last_name) }}</span></h2>
				<h4 align="center">{{ $user->title }}</h4>
			</div>
			<div class="row">
		    
		    <div class="col-md-12"> 
		      
		      <div class="panel">
		        <div class="panel-body">
					<div class="row">    
		            <br>
		            <div class="col-md-12 col-sm-12" align="center">
		              <div class="row">
		              	<div class="col-md-12 col-lg-12">
		              		<img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:200px;height:200px" class="img-circle">
		              	</div>
		              	<br/><br/><br/>
		                <div class="col-xs-12 col-md-12 col-lg-12">
		                  <h3>{{ $user->first_name }}</h3>
		                  <ul class="list-inline"><li>Joined Frostfeed <a href="#">{{ $user->created_at->diffForHumans() }}</a></li></ul>
		                  </div>
		                <div class="col-xs-3"></div>
		              </div>
		              <br><br>
		            </div>
		          </div>
		          <hr>
		        </div>
		      </div>
		                                                                                       
			                                                
		                                                      
		   	</div><!--/col-12-->
		  </div>
	</div>
@stop