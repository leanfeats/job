@extends('index')

@section('title', 'v1')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('ico')
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}">
@endsection

@section('contents')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
            <h1>Jobs Login &amp; Register Forms</h1>
            <div class="description">
                <p>
                    Create a good carrier with us!
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 show-forms">
            <span class="show-register-form active">Register</span> 
            <span class="show-forms-divider">/</span> 
            <span class="show-login-form">Login</span>
        </div>
    </div>

    <div class="row register-form">
        <div class="col-sm-4 col-sm-offset-1">
            <form role="form" action="" method="post" class="r-form">
                <div class="form-group">
                    <label class="sr-only" for="r-form-first-name">First name</label>
                    <input type="text" name="r-form-first-name" placeholder="First name..." class="r-form-first-name form-control" id="r-form-first-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="r-form-last-name">Last name</label>
                    <input type="text" name="r-form-last-name" placeholder="Last name..." class="r-form-last-name form-control" id="r-form-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="r-form-email">Email</label>
                    <input type="text" name="r-form-email" placeholder="Email..." class="r-form-email form-control" id="r-form-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="l-form-password">Password</label>
                    <input type="password" name="l-form-password" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
                </div>
                <button type="submit" class="btn">Sign me up!</button>
            </form>
        </div>
        <div class="col-sm-6 forms-right-icons">
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
                <div class="col-sm-10">
                    <h3>Beautiful Forms</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-commenting"></i></div>
                <div class="col-sm-10">
                    <h3>Awesome Login</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
                <div class="col-sm-10">
                    <h3>Great Registration</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row login-form">
        <div class="col-sm-4 col-sm-offset-1">
            <form role="form" action="" method="post" class="l-form">
                <div class="form-group">
                    <label class="sr-only" for="l-form-username">Username</label>
                    <input type="text" name="l-form-username" placeholder="Username..." class="l-form-username form-control" id="l-form-username">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="l-form-password">Password</label>
                    <input type="password" name="l-form-password" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
                </div>
                <button type="submit" class="btn">Sign in!</button>
            </form>
            <div class="social-login">
                <p>Or login with:</p>
                <div class="social-login-buttons">
                    <a class="btn btn-link-1" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-link-1" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-link-1" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 forms-right-icons">
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
                <div class="col-sm-10">
                    <h3>New Features</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-eye"></i></div>
                <div class="col-sm-10">
                    <h3>Easy To Use</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
                <div class="col-sm-10">
                    <h3>Social Integrated</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $.backstretch("{{ asset('img/backgrounds/v1/1.jpg') }}");
                // $.backstretch([
                //     "img/backgrounds/1.jpg"
                //     , "img/backgrounds/2.jpg"
                //     , "img/backgrounds/3.jpg"
                //     ], 
                //     {duration: 3000, fade: 750});
                });
        </script>
@endsection