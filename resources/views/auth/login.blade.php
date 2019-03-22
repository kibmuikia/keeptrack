@extends('layouts.app2')

@section('content')

<div class="container jazaHeight">
    <div class="section">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6 offset-s3 m6 offset-m3">
                                <span class="card-title">Login</span>
                            </div>
                        </div>
                        <div class="row">
                            <form class="col s12 m12" method="POST"
                            action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required >
                                        <!-- autofocus -->
                                        <label for="email">
                                          {{ __('E-Mail Address') }}
                                        </label>
                                        @if ($errors->has('email'))
                                            <span class="red-text text-lighten-1" role="">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <input id="password" type="password" class="validate"
                                        name="password" required>
                                        <label for="password">
                                            {{ __('Password') }}
                                        </label>
                                        @if ($errors->has('password'))
                                            <span class="red-text text-lighten-1" role="">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s3 offset-s6 m3 offset-m6">
                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                        <input type="checkbox" name="remember" id="remember"
                                         class="" style="opacity:1;"/>
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <div class="row">
                                            <div class="col s6 m4">
                                                <button type="submit"
                                                class="waves-effect waves-light btn">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            <div class="col s12 m8">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--<div class="card-action">
                        <a href="#!">Link</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
