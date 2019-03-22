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
                                <span class="card-title">Register</span>
                            </div>
                        </div>
                        <div class="row">
                            <form method="POST" action="{{ route('register') }}"
                            class="col s12 m12">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <input type="text" name="name" id="name"
                                        class="validate" required  value="{{ old('name') }}"/>
                                        <label for="name">
                                            {{ __('Name') }}
                                        </label>
                                        @if ($errors->has('name'))
                                            <span class="red-text text-lighten-1">
                                                <!-- role="alert" -->
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
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
                                    <div class="input-field col s12 m12">
                                        <input id="password-confirm" type="password"
                                        class="validate"
                                        name="password_confirmation" required>
                                        <label for="password-confirm">
                                            {{ __('Confirm Password') }}
                                        </label>
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <button type="submit"
                                        class="waves-effect waves-light btn">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
