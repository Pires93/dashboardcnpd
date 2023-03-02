@extends('auth.layouts.app')


@section('content')
    <div class="card o-hidden border-0 my-5" id="backregister">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block" id="backimage"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input id="name" type="text" placeholder="Entre seu nome"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Entre seu email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="typeUser" type="text" placeholder="Entre o tipo de User"
                                    class="form-control @error('typeUser') is-invalid @enderror" name="typeUser"
                                    value="{{ old('typeUser') }}" required autocomplete="typeUser">

                                @error('typeUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password" placeholder="Entre sua senha"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" placeholder="Confrime o seu password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">

                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" id="buttonregister">
                                Register Account
                            </button>


                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    #backimage {
        background-image: url("admin/img/logo.png");
        background-repeat: no-repeat;
    }

    #backregister {
        box-shadow: 2px 2px 4px 4px #061536;
    }

    #buttonregister {
        background: transparent linear-gradient(90deg, #bd9a13 0%, #061536 100%) 0% 0% no-repeat padding-box;
        ;

    }
</style>
