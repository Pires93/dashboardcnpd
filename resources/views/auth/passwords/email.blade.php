@extends('auth.layouts.app')


@section('content')
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 my-5" id="backrecpass">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block" id="backimage"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                            </div>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Entre o email da sua conta!"
                                     class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Send Password Reset Link
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

    </div>

</div>
<style>
    #backimage{
        background-image: url("/admin/img/logo.png");
        background-repeat: no-repeat;
        width: 100px;
        height: 350px;
    }
    #backrecpass {
        box-shadow: 2px 2px 4px 4px #061536;
    }
</style>

@endsection

