<!--contact form-->
<div id="get-touch">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="get-touch-heading">
                    <h2>Επικοινωνια</h2>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                {!! Form::open(array('route' => 'send_email', 'class' => 'form contactForm')) !!}

                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::text('name', null, 
                                array('required', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'Όνομα')) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                             {!! Form::text('email', null, 
                                array('required', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'E-mail')) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::textarea('message', null, 
                                array('required', 
                                      'class'=>'', 
                                      'placeholder'=>'Το μήνυμά σου...')) !!}
                        </div>
                    </div>
                    <div class="submit">
                        {!! Form::submit('Αποστολη', 
                              array('class'=>'btn btn-primary')) !!}
                    </div>

                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
</div>