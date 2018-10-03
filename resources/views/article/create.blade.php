@extends('layouts.base')
@section('content')


    <div class="content-container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br/>

                <div class="panel panel-default">
                        <a href="/cms">
                            <button class="btn btn-danger pull-right" type="button">Back</button>
                        </a>
                </div>

                    {!! Form::open(['url' => '/article/store', 'style' => 'padding:10px', 'files' => true]) !!}
                    {{csrf_field()}}
                    <div class="form-group">
                        {!! Form::label('isLive', 'Is Live', ['class'=>'form-label']) !!}
                        {!! Form::checkbox('isLive') !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('media_type', 'Media Type:',['class'=>'form-label']) !!}
                      <select value="" class="form-control" name="media_type" >
                        <option selected="selected" value="image">Image</option>
                        <option value="video">Video</option>
                      </select>
                    </div>

                    <div class="form-group">
                        {!! Form::label('title', 'Title:',['class'=>'form-label']) !!}
                        {!! Form::text('title', null, array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('image_file', 'Image Upload:',['class'=>'form-label']) !!}
                        {!! Form::file('image', array('class' => 'image')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('video', 'Video url:',['class'=>'form-label']) !!}
                        {!! Form::text('video', null, array('placeholder'=>'https://youtu.be/EctzLTFrktc', 'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('article', 'Body:',['class'=>'form-label']) !!}
                        {!! Form::textarea('article', null, array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Description:',['class'=>'form-label']) !!}
                        {!! Form::textarea('description', null, array('required'=>'required', 'class'=>'form-control')) !!}
                    </div>

                    {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/js/jquery/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
    
    <link type="text/css" href="/css/themes/custom-theme/jquery-ui-1.10.4.custom.css" rel="stylesheet" /> 
    <script>
        $( function() {

            $( "#start_date" ).datepicker({

              changeMonth: true,

              changeYear: true,

              dateFormat: 'yy-mm-dd',

              //numberOfMonths: 2,   //number of monthes presented

              onSelect: function(selected) { 
                 $("#end_date").datepicker("option","minDate", selected)    //set the min date of the end_date field
              } 


            });

            $( "#end_date" ).datepicker({

              changeMonth: true,

              changeYear: true,

              dateFormat: 'yy-mm-dd',

              //numberOfMonths: 2,  //number of monthes presented

             onSelect: function(selected) { 
               $("#start_date").datepicker("option","maxDate", selected)   //set the max date of the start_date field
             } 


            });

          } );  
         
    </script>

@endsection