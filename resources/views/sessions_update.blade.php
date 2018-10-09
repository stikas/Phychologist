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
                    
                    {!! Form::open(['url' => ['sessions/update'], 'method' => 'post', 'files' => true]) !!}

                    <div class="form-group">
                        {!! Form::label('session', 'Session:',['class'=>'form-label']) !!}
                        {!! Form::text('session', $maria->session,array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection


