<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jobs') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style type="text/css">

        a{
            color: yellowgreen;
        }
        a:hover{
            color: darkgreen;
        }

        .container-bs{
            box-sizing: border-box;
            box-shadow: 0 0 10px 0 #888888;
        }
                }
        .container-nb{
            border: none;
            box-shadow: 0 0 0 0 #888888;
        }
        #layout>.container {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .well{
            border-radius: 0;
            margin-bottom: 0;
        }
        .well:last-child{
            margin-bottom: 15px;
        }
        .well-nb{
            border: none;
        }
        .custom-search-form:hover{
            box-sizing: border-box;
            box-shadow: 5px 5px 5px 0 #888888;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .m-xs-top{
            margin-top: 5px!important;
        }
        .p-md-top{
            padding-top: 20px!important;
        }
    </style>

</head>
<body>
    <div id="layout">
        <div class="container m-xs-top p-md-top">
            <div class="row">
                Title Search
            </div>
            <div class="row">
                <div class="col-md-3">
                    
                        <h5><b>Category</b></h5>

                </div>
                <div class="container-bs col-md-9">

                        @include('inc.search',['url'=>'jobs','link'=>'jobs'])
                        @yield('content')

                </div>
            </div>
        </div>
    </div>
</body>
</html>