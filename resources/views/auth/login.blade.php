@extends('layouts.app')

@section('content')
<div class="container-fluid" style="backgroundColor:#5563ff;height:100vh;padding:50px 0;">
    <div class="row justify-content-center" style="padding: 3% 7%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="backgroundColor:#ee5c5c;color:#fff">Identifier</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Address E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Souviens moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Connecter
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       Mot de passe oublié?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-md-6" style="padding:0;height:80vh;overflow:hidden">
                <img height="100%" src="{{ asset('/images/store1.png') }}" alt="">
            </div> -->
        </div>
    </div>
</div>
@endsection
