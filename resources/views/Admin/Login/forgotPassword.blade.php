<!DOCTYPE HTML>
<html>
<head>
    <title>Ultra Modern an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
    <link href="{{ asset('css/cssAdmin/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/cssAdmin/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/cssAdmin/forgotPasswordCSS.css') }}" rel='stylesheet' type='text/css' />
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <div class="sticky-header header-section ">
        <div class="header-left">
            <div class="logo">
                <a href="index.html"><h1>Ultra Modern</h1></a>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br><br><br>
    <div id="copy-section">
        <div class="main-page">
            <div class="login-form">
                <h4>Login As an Admin</h4>
                <h5><strong>Welcome</strong>You can change password here</h5>

                {!! Form::open(['method'=>'POST', 'action'=>'AdminForgotPasswordController@store', 'files'=>true]) !!}

                    Email :
                    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    * Remember a wrong email will do no effect.<br><br>

                    New Password:
                    {!! Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Password']) !!}

                    {!! Form::submit('Confirm Change', ['class'=>'btn btn-primary']) !!}

                {!! Form::close() !!}
                @include('pertial.validationErr')
            </div>
        </div>
    </div>
    <div class="copy-section">
        <p>&copy; 2016 Ultra Modern. All rights reserved | Design by <a href="http://w3layouts.com">Soham Roy</a></p>
    </div>
</div>
</body>
</html>