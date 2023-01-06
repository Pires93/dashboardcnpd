@extends('layouts.master')
@section('title', 'List Users')

@section('content')

 <!-- Breadcrumbs -->
 {{ Breadcrumbs::render('Novo User') }}
    <div class="row">
        <div class="col-lg-4 mb-4" id="geral"></div>
        <div class="col-lg-4 mb-4" id="geral">
            <form method="POST" action="/users">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" placeholder="Entre seu nome"
                        class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                        required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" placeholder="Entre seu email"
                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email">

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
                <div class="form-group">
                        <input id="password" type="password" placeholder="Entre sua senha"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  <!--  <div class="col-sm-6">
                        <input id="password-confirm" type="password" placeholder="Confrime o seu password"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>-->
                </div>
                <button class="btn btn-primary btn-user btn-block" id="buttonregister">
                    Register Account
                </button>
            </form>
        </div>
        <div class="col-lg-4 mb-4" id="geral"></div>
    </div>

@endsection
