@extends('layouts.master')

@section('content')
	<body>
		<div class="container" style="margin:50px 0;">
			<div class="row">
				<h2 align="center"><span style="border-bottom:1px solid #666;">Editing Post : {{ $post->title }}</span></h2>
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
				    	{!! Form::model($post, array('url' => 'post/'.$post->slug, 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'put')) !!}   
				        
				        @include('posts._form_partial',['submitButtonText' => 'Update Post'])

				      	{!! Form::close() !!}        
				    </div>
			  </div>
			  <div class="col-md-3"></div>
			</div>
		</div>
		<div class="container">
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			    <div class="modal-content">
			      	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title">Delete Post</h4>
			        </div>
			      	<div class="modal-body">
				        <p>Are you sure?</p>
			      	</div>
				    <div class="modal-footer">
					    {{ $post->slug }}
					    {!! Form::open(array('url' => 'post/'.$post->slug, 'method' => 'DELETE')) !!}
				        	<a href="#" class="underline mr10" data-dismiss="modal">Cancel</a>
			            	<button type="submit" class="btn btn-danger">Delete</button>
					    {!! Form::close() !!}
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
@stop