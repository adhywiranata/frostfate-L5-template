@extends('layouts.master')

@section('content')
	<body>
		<div class="container" style="margin-top:50px;">
			<div class="row">
				<h2 align="center"><span style="border-bottom:1px solid #666;">{{ $post->title }}</span></h2>
			</div>
			<div class="row">
		    
		    <div class="col-md-12"> 
		      
		      <div class="panel">
		        <div class="panel-body">
					<div class="row">    
		            <br>
		            <div class="col-md-2 col-sm-3 text-center">
		            	<a class="story-img" href="#"><img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:100px;height:100px" class="img-circle"></a>
		            	<div class="row">
		            		<br>
		            		<div class="col-md-12">
		            			Jeff Moriarty
		            		</div>
		            	</div>
		            </div>
		            <div class="col-md-10 col-sm-9">
		              <div class="row">
		              	<div class="col-md-12 col-lg-9">
		              		<div style="background:url('http://cdns2.freepik.com/free-photo/leaf-on-the-coffee_426-19314828.jpg'); width:100%; height:150px; margin: 10px 0 20px 0; background-size:cover; background-position:0% 25%;"></div>
		              	</div>
		                <div class="col-xs-12 col-md-12 col-lg-9">
		                  <p>{{ $post->content }}</p>
		                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
		                  <ul class="list-inline"><li><a href="#">{{ $post->created_at->diffForHumans() }}</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
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