    <br/><br/>
    <div class="form-group">
        <label for="inputFirst" class="col-sm-12 ">Title</label>
            <div class="col-sm-12">
                {!! Form::text('title', null , array('class'=>'form-control', 'id' => 'inputFirst', 'placeholder'=>'Post Title', '','')) !!}
                {!! $errors->first('title', '<small class="text-danger">:message</small>') !!}
            </div>
    </div>
    <div class="form-group">
        <label for="inputLast" class="col-sm-12">Content</label>
            <div class="col-sm-12">
                    {!! Form::textarea('content', null , array('class'=>'form-control', 'id' => 'inputLast', 'placeholder'=>'Write anything you want ...', '','')) !!}
                    {!! $errors->first('content', '<small class="text-danger">:message</small>') !!}
            </div>

    </div>
    <div class="form-group">
        <br/>
        <div class="col-sm-1"></div>
        <div class="col-sm-11">
            {!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
            <a href="{{ url('post') }}" class="ml10 underline">Cancel</a>
        </div>
    </div>