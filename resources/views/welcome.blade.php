<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootswatch-solar.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">

</head>
<body>
<header id="header_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">Contact Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="top-right lf_auth_links">
                    @auth
                    @else
                        <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                    @endauth
                    <div class="clearfix"></div>
                </div>
            @endif
        </div>
    </nav>
</header>

<section id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Contact Manager</h1>
                    <p class="lead">Manage Your Contacts In a Smart Way.</p>
                    <hr class="my-4">
                    <p>Manage all your contacts with name,phone,address,picture,email. And find instantly by live
                        search.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{url('/register')}}" role="button">Get Started</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card text-white bg-dark mb-3" >
                    <div class="card-header">Unlimited</div>
                    <div class="card-body">
                        <h4 class="card-title">Unlimited Contacts</h4>
                        <p class="card-text">Add as many contacts groups and contacts to your list.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card text-white bg-dark mb-3"  >
                    <div class="card-header">Live Search</div>
                    <div class="card-body">
                        <h4 class="card-title">Fastest Search</h4>
                        <p class="card-text">Find Your Contacts in less then a second with the live search.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">Messaging</div>
                    <div class="card-body">
                        <h4 class="card-title">Email Contacts</h4>
                        <p class="card-text">Send quick email Or SMS to any of your contacts instantly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
