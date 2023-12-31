<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS-HT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        body {
            /* background-image: url("{{ URL::asset('img/church_bg.jpg') }}"); */
            background-image: url('https://scontent.fnbo2-1.fna.fbcdn.net/v/t39.30808-6/400363812_741208631386376_7560462057796779648_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFbA3sXQ2pbrLw_Y6PO6aVNhz7FIB4YifmHPsUgHhiJ-SqvZLEqMWXhCKx3CIY4DC6-UfuBlwOz_nUhRSVwLbOk&_nc_ohc=gAP8la0MhhEAX8Q4Xe1&_nc_ht=scontent.fnbo2-1.fna&oh=00_AfAqn8TANlgbJUMCB6BPQpKcWWRPHJNuqUs0Vj42NGaUBw&oe=6565BE3E');            background-color: #cccccc;
            background-size: cover;
        }

        /* append */
        .auth-link a {
            color: silver;
            background-color: #636b6f;
            padding: 1em;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links auth-link">
                @auth
                    <a href="{{ url('/dashboard') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif

        <div class="panel">
            <div class="content">
                <div class="title m-b-md panel-heading">
                    <b>ADMIN CMS</b>
                </div>
                <b><i>Church System made easier</i></b>
                <div class="panel-footer">
                    <b>
                        <h3 class="text-primary font-weight-bold">A Product Of <a href="">
                                {{ env('APP_NAME') }}</a></h3>
                    </b>
                </div>
            </div>
            <div class="panel-footer">
                <div class="content">
                    @if (Route::has('login'))
                        <div class="auth-link links">
                            @auth
                                <a href="{{ url('/dashboard') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
