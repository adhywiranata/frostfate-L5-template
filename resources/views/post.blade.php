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
		<div class="container">
			<div class="row">
		    
		    <div class="col-md-12"> 
		      
		      <div class="panel">
		        <div class="panel-body">

		        	<!--/stories-->
				  	@foreach($posts as $post)
				  	<div class="row">    
		            <br>
		            <div class="col-md-2 col-sm-3 text-center">
		              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
		            </div>
		            <div class="col-md-10 col-sm-9">
		              <h3>{{ $post->title }}</h3>
		              <div class="row">
		                <div class="col-xs-9">
		                  <p>{{ $post->content }}</p>
		                  <p class="lead"><button class="btn btn-default">Read More</button></p>
		                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
		                  <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
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