@extends('index')

@section('styles')
	<link rel="stylesheet" href="{{asset('css/form-elements3.css') }}">
    <link rel="stylesheet" href="{{asset('css/style3.css') }}">
    <style type="text/css">
        #form-password{
            height: 50px;
            margin: 0;
            padding: 0 20px;
            vertical-align: middle;
            background: #f8f8f8;
            border: 1px solid #ddd;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 50px;
            color: #888;
        }
    </style>
@endsection

@section('title', 'v3')

@section('ico')
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed3.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed3.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed3.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed3.png') }}">
@endsection

@section('contents')
    <div class="top-content">
        
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <a class="logo" href="index.html"></a>
                        <h1><strong>Jobs</strong> Registration/Login Form</h1>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam turpis elit, interdum sit amet congue sed, molestie ac dolor.
                            </p>
                        </div>
                        <div class="top-big-link">
                            <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">Register</a>
                            <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- MODAL register-->
    <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h3 class="modal-title" id="modal-register-label">Sign up now</h3>
                    <p>Fill in the form below to get instant access:</p>
                </div>
                
                <div class="modal-body">
                    
                    <form role="form" action="" method="post" class="registration-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">First name</label>
                            <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last name</label>
                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>
                        <button type="submit" class="btn">Sign me up!</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
     <!-- MODAL login-->
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h3 class="modal-title" id="modal-login-label">Login to our site</h3>
                    <p>Enter your username and password to log on:</p>
                </div>
                
                <div class="modal-body">
                    
                    <form role="form" action="" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>
                        <button type="submit" class="btn">Sign in!</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/jquery.backstretch.min3.js') }}"></script>
    <script src="{{asset('js/scripts3.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.backstretch("{{ asset('img/backgrounds/v3/1.jpg') }}");
        });
    </script>
@endsection
