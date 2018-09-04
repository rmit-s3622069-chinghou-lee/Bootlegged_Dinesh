<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <!-- Title -->
    <title>Bootlegged</title>

</head>
<head>
<body id="login-body">
<nav class="navbar navbar-expand-md navbar-dark" id="nav-login">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
            <a class="ml-3 btn navbar-btn btn-primary" href="/">Home</a>
        </div>
    </div>
</nav>
    <div class="container-fluid" id="login-container-fluid">
    <div id="login">
        <div class="col-md-6 offset-md-3">
            <div class="img-fluid py-3"></div>
            @if(session()->has('message'))
                <div class="alert alert-info">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center mb-4">
                    <img class="mb-4" src="{{ asset('images/logo1.png') }}" alt="" id="login-logo">
                    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                </div>
                <div class="form-label-group">
                    <input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-label-group">
                    <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="checkbox mb-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>


                <button type="submit" class="btn btn-lg btn-primary btn-block">
                    {{ __('Login') }}
                </button>
                <div class="row">
                    <a class="col-6 btn btn-link text-left pl-0 text-white" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <a class="col-6 btn btn-link text-right pr-0 text-white" href="{{ route('register') }}">
                        {{ __('Create your account') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
</head>


@section('additional_scripts')
    @parent
    <script>
        $("form").on('submit', function() {
            window.displayLoader();
        });
    </script>
@endsection
    </body>
</html>
