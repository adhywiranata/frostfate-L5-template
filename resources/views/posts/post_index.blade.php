@extends('layouts.master')

@section('content')
	<body>
		<div class="container" style="padding:160px 0;">
			<div class="row">
				<div class="col-md-12 content">
					<div class="title">Frostfate Laravel 5</div>
					<div class="quote">A template that matters...</div>
				</div>
			</div>
		</div>
		<div class="container cover" style="background:url('images/macbook.jpg'); margin:50px 0; width:100%; height:350px; background-size:cover; background-position:0% 45%; ">
		</div>

		<div class="container">
			<div class="row">
				<h2 align="center"><span style="border-bottom:1px solid #666;">Recent Posts</span></h2>
			</div>
			<div class="row">
		    
		    <div class="col-md-12"> 
		      
		      <div class="panel">
		        <div class="panel-body">

		        	<!--/stories-->
				  	@foreach($posts as $post)
				  	<div class="row">    
		            <br>
		            <div class="col-md-2 col-sm-3 text-center">
		            	<a class="story-img" href="#"><img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:100px;height:100px" class="img-circle"></a>
		            	<div class="row">
		            		<br>
		            		<div class="col-md-12">
		            			<a href="{{ $post->name }}">{{ $post->name }}</a></h3>
		            		</div>
		            	</div>
		            </div>
		            <div class="col-md-10 col-sm-9">
		              <h3><a href="{{ $post->slug }}">{{ $post->title }}</a></h3>
		              <div class="row">
		              	<div class="col-md-12 col-lg-9">
		              		<div style="background:url('http://cdns2.freepik.com/free-photo/leaf-on-the-coffee_426-19314828.jpg'); width:100%; height:150px; margin: 10px 0 20px 0; background-size:cover; background-position:0% 25%;"></div>
		              	</div>
		                <div class="col-xs-12 col-md-12 col-lg-9">
		                  <p>{{ $post->content }}</p>
		                  <p class="pull-right">
		                  	<span class="label label-default">keyword</span> 
		                  	<span class="label label-default">tag</span> 
		                  	<span class="label label-default">post</span>
		                  </p>
		                  <ul class="list-inline">
		                  	<li><a href="#">{{ $post->created_at }}</a></li>
		                  	<li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li>
		                  	<li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li>
		                  	<li><a href="{{ url() }}/post/{{$post->slug}}/edit"><i class="glyphicon glyphicon-edit"></i> Edit Post</li>
		                  	<li style="vertical-align:bottom">{!! Form::open(array("url" => "post/".$post->slug, "method" => "delete")) !!}<a href=""><button type="submit" class="button_as_link"><i class="glyphicon glyphicon-trash"></i> Delete Post</button></a>{!! Form::close() !!}</li>
		                  </ul>
		                  </div>
		                <div class="col-xs-3"></div>
		              </div>
		              <br><br>
		            </div>
		          </div>
		          <hr>
		          @endforeach
		        </div>
		      </div>
		                                                                                       
			                                                
		                                                      
		   	</div><!--/col-12-->
		  </div>
	</div>

@stop