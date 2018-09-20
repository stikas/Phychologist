@extends('layouts.base')
@section('content')

    <div class="content-container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br/>
                <div class="panel panel-default">
                    <div style="height:50px" class="panel-heading">Edit<a href="/cms">
                            <button class="btn btn-danger pull-right" type="button">Back</button>
                        </a></div>

                    @if (session('error_message'))
                    <div class="alert alert-danger">
                        <strong>{{ session('error_message') }}</strong> 
                    </div>
                    @endif
                    
                    {!! Form::open(['url' => ['article/update', $article->id], 'method' => 'post', 'files' => true]) !!}

                    <div class="form-group">
                        {!! Form::label('isLive', 'Is Live', ['class'=>'form-label']) !!}
                        {!! Form::checkbox('isLive', null, $article->is_live) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('title', 'Title',['class'=>'form-label']) !!}
                        {!! Form::text('title', $article->title,array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('image_file', 'Image Upload:',['class'=>'form-label']) !!}
                        {!! Form::file('image', array('class' => 'image')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('article', 'Body', ['class'=>'form-label']) !!}
                        {!! Form::textarea('article', $article->article,array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Description', ['class'=>'form-label']) !!}
                        {!! Form::textarea('description', $article->description,array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    {{ Form::submit('Edit the Article!', array('class' => 'btn btn-primary')) }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection


