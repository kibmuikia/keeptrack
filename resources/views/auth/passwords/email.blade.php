@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6 offset-s3 m6 offset-m3">
                                <span class="card-title">
                                    {{ __('Reset Password') }}
                                </sp pan>
                            </div>
                            @if (session('status'))
                                <div class="col s12 m12 center-align">
                                    <p> {{ session('status') }} </p>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <form method="POST" action="{{ route('password.email') }}"
                            class="col s12 m12">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <input id="email" type="email" class="validate"
                                        name="email" value="{{ old('email') }}" required >
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
                                    <div class="input-field col s12 m10 push-m4">
                                        <button type="submit"
                                        class="waves-effect waves-light btn">
                                            {{ __('Send Password Reset Link') }}
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
