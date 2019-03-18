@extends('layouts.app2')

@section('content')

<div class="container jazaHeight">
    <div class="section">

        <div class="row">
          <div class="col s12">

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Your Profile</span>
                    @if (session('status'))
                        <div class="">
                            <!-- alert alert-success role="alert" -->
                            {{ session('status') }}
                        </div>
                    @endif
                    <p> You are logged in! </p>
                </div>
                <div class="card-action">
                  <a href="/tasks">View Your Tasks</a>
                  <!--<a href="#">This is a link</a>-->
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

@endsection
