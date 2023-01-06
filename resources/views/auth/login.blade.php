@extends('auth.layouts.app')

@section('content')

    <div class="row justify-content-center" id="logintop">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-10 my-5" id="backlogin">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" id="backimage"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b> Welcome to SGD CNPD </b><sup>V1.0</sup></h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Entre seu email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="Entre sua senha"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" id="buttonlogin">
                                        Login
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <style>
        #logintop{
            margin-top: 100px
        }
        #backimage {
            background-image: url("admin/img/logo.png");
            background-repeat: no-repeat;
        }

        #backlogin {
            box-shadow: 2px 2px 4px 4px #061536;
        }
        #buttonlogin{
            background:transparent linear-gradient(90deg,#bd9a13 0%,#061536 100%) 0% 0% no-repeat padding-box;;

        }
    </style>
@endsection
