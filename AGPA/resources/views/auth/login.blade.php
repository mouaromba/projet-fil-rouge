<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link href="{{asset('css/startmin/bootstrap.min1.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('css/startmin/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/startmin/startmin.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


</head>

<body>
    <h1 class="col-6  text-center">APPLICATION GESTION PARC AUTOMOBILE
    </h1>
    <br>

    <div class="col-4">
        <h1 class="col-mt-5  text-center">
            <MARQUEE BEHAVIOR="alternate"> BIENVENUE DANS AGPA</MARQUEE>

        </h1>

    </div>
    <br><br>
    <div class="container  " style="margin-bottom: 100%;">
        <div class="col-12 d-flex justify-content-center w-100 ">
            <div class="col-md-6">
                <img src="{{ asset('assets/Images/car.jpeg')}}" width="100%" height="270px" alt="">
            </div>

            <div class="col-md-6 mb-5">
                <div class="card  m-4">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('loginuser') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <h3 style="text-align:center ;"> Copyrigth@2022!designed by Jusy</h3>
        </div>
    </div>
</body>

</html>