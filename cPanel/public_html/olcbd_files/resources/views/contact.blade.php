@if(Request::is('contact'))

    @extends('layouts.app')

    {{-- Page Title Starts Here --}}
@section('title')
    Contact
@endsection
{{-- Page Title Ends Here --}}

@section('content')

    <div class="blog-content">
        <center><h3 class="blogpost-title">
            Contact with us
        </h3></center>
        {{--<div class="blog-meta">--}}
            {{--<span>You must fill up all the fields that are marked with * sign</span>--}}
        {{--</div>--}}

        <div class="panel-body" id="contact">
            <div class="row">

                <div class="col-sm-6" id="street">
                    <div class="row address-details">
                        <div id="holder">
                            <h4>Our Address</h4>

                            <div class="row">
                                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                                    <i class="ion-ios-email-outline"></i>
                                    <p>olcbd149@gmail.com<br><strong> jubairlaws@gmail.com </strong> <br>admin@olcbd.org</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                                    <i class="ion-ios-telephone-outline"></i>
                                    <p>Feel free to call</p>
                                    <p><strong> +880 1855882378 </strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <p>Contact person: <br> <strong> Moklasur Rahman (Jubair) </strong></p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6" id="form">
                    
                    <div id="holder">
                        <div class="blog-meta">
                            <span>Fill up all the fields that are marked with * sign</span>
                        </div>
                        {{-- Form Content starts here --}}
                        {!! Form::open(['url' => 'contact/submit','files'=>'true','autocomplete'=>'off']) !!}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            {{ Form::label('name', 'Your Name : *') }}
                            {{ Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Please enter your name', 'required'=>'','maxlength'=>35,'oninput'=>'check(this)','autocomplete'=>'off','id'=>'customer_name']) }}
                            <span id='message'> </span>
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Your Email : *') }}
                            {{ Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'Please enter your email', 'required'=>'','oninput'=>'check(this)','autocomplete'=>'off','id'=>'customer_email']) }}
                            <span id='message2'> </span>
                        </div>

                        <div class="form-group">
                            {{ Form::label('service', 'Service : *') }}
                            {{ Form::select('service',[0=>'Custom', 1=>'Legal Opinion', 2=>'Legal Documentation', 3=>'Legal Research', 4=>'Court Service/Advocacy'],0, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('attachment', 'Attachment : ') }}
                            {{ Form::file('attachment',null, ['class'=>'form-control', 'placeholder'=>'Please attach your file','aria-describedby'=>'fileHelp']) }}
                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
                        </div>

                        <div class="form-group">
                            {{ Form::label('message', 'Your Message : ') }}
                            {{ Form::textArea('message',null, ['class'=>'form-control', 'placeholder'=>'Please enter your Message', 'rows' => 3, 'cols' => 40, 'id'=>'customer_message']) }}
                            <span id='message3'> </span>
                        </div>

                        <div class="form-group">
                            {{ Form::submit('Submit', ['class' => 'btn btn-primary','id'=>'submit']) }}
                        </div>
                        
                        <div class="form-group">
                            <span class="badge badge-danger" id="alter">Please fill up the required fields properly !!!</span>
                        </div>

                        {!! Form::close() !!}
                        {{-- Form Content ends here --}}
                    </div>
                        
                </div>

                
            </div>
        </div>

        <div class="container">
             <div class="map-area">
                <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.27856647890007!2d90.40288611154736!3d23.73107519746059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ee26277f91%3A0x9833622160bfb5cf!2sBangladesh+Supreme+Court!5e0!3m2!1sen!2sbd!4v1530556276019" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                    
                </div>
            </div>
        </div>


    </div>


    <script type="text/javascript">
        // first name validation ---
        $('#customer_name').on('keyup', function () {
            var x = $(this).val();
            var validName = /^[a-zA-Z ][a-zA-Z ._\-]*$/;

            if (x.match(validName) && x.length>2) {
                $('#submit').css('display', 'inline');
                $('#alter').css('display', 'none');
                $('#message').html('You got a nice name !').css('color', '#4286f4').css('font-family', 'cursive').css('background', '#c0ffb2');
            }
            else if (x.match(validName) && x.length>1) {
                $('#submit').css('display', 'inline');
                $('#alter').css('display', 'none');
                $('#message').html('Perfect !').css('color', '#4286f4').css('font-family', 'cursive').css('background', '#c0ffb2');
            }
            
            else if (x=="") {
                $('#submit').css('display', 'none');
                $('#alter').css('display', 'inline');
                $('#message').html('Please fill-up this field !').css('color', '#703d40').css('font-family', 'cursive').css('background', '#ffd1d4');
                x.focus();
                return false;
            }
            else {
                $('#submit').css('display', 'none');
                $('#alter').css('display', 'inline');
                $('#message').html('Please enter valid name').css('color', '#703d40').css('font-family', 'cursive').css('background', '#ffd1d4');
            }
        });

        // email validation ---
        $('#customer_email').on('keyup', function () {
            var x = $(this).val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");

            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                $('#submit').css('display', 'none');
                $('#alter').css('display', 'inline');
                $('#message2').html('Please enter valid email address').css('color', '#703d40').css('font-family', 'cursive').css('background', '#ffd1d4');
            }
            else if (x=="") {
                $('#submit').css('display', 'none');
                $('#alter').css('display', 'inline');
                $('#message2').html('Please fill-up this field !').css('color', '#703d40').css('font-family', 'cursive').css('background', '#ffd1d4');
                x.focus();
                return false;
            }
            else {
                $('#submit').css('display', 'inline');
                $('#alter').css('display', 'none');
                $('#message2').html('Perfect !').css('color', '#4286f4').css('font-family', 'cursive').css('background', '#c0ffb2');
            }
        });

        // message validation ---
        $('#customer_message').on('keyup', function () {
            var x = $(this).val();
            if (x.length > 5) {
                $('#message3').html('Thanks for your valuable message !').css('color', '#4286f4').css('font-family', 'cursive').css('background', '#c0ffb2');
            }
            else if (x.length > 1) {
                $('#message3').html('You are great !').css('color', '#4286f4').css('font-family', 'cursive').css('background', '#c0ffb2');
            }
            else if (x=="") {
                $('#message3').html('');
            }
        });
    </script>

@endsection

@endif
