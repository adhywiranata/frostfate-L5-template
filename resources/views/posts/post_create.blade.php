@extends('layouts.master')

@section('content')
	<body>
		<div class="container" style="margin:50px 0;">
			<div class="row">
				<h2 align="center"><span style="border-bottom:1px solid #666;">Write a New Post</span></h2>
			</div>
			@if (Session::has('message'))      
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="col-sm-2 control-label">Close</span></button>
			  <strong>Success!</strong> {{ Session::get('message') }}
			</div>
			@endif            
			<div class="row">
				<div class="col-md-3"></div>
			  	<div class="col-md-6">
				  	<div id="example">
				    	{!! Form::open(array('url' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post')) !!}   
				        
				        @include('posts._form_partial',['submitButtonText' => 'Add Post'])

				      	{!! Form::close() !!}        
				    </div>
			  </div>
			  <div class="col-md-3"></div>
			</div>
		</div>
@stop