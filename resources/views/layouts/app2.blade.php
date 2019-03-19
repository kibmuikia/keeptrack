<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- <title>Parallax Template - Materialize</title> -->
   <!-- Title options -->
  <!-- <title>@yield('title', 'Todo')</title> -->
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css"
  integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+"
  crossorigin="anonymous">
  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <!-- <a id="logo-container" href="#" class="brand-logo red">Logo</a> -->
      <a href="{{ url('/') }}" class="brand-logo" id="logo-container">
        Todo
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="{{ url('/about') }}">
            About
          </a>
        </li>

    <!-- . -->
    <!-- nav-item,nav-link -->
        @guest
          <li class="">
              <a class="" href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
          </li>
          @if (Route::has('register'))
              <li class="">
                  <a class="" href="{{ route('register') }}">
                    {{ __('Register') }}
                  </a>
              </li>
          @endif
        @else
          <li>
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#!' data-target='dropdown1'>
              {{ Auth::user()->name }}
            </a>
            <!-- End-Dropdown Trigger -->
          </li>
          <!-- <li>
            <a href="#!">
            Another-Link
            </a>
          </li> -->
        @endguest
    <!-- . -->
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li>
          <a href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
        </li>
        <li>
          <a href="/about">
            About
          </a>
        </li>
    <!-- . -->
    <!-- nav-item,nav-link -->
        @guest
          <li class="">
              <a class="" href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
          </li>
          @if (Route::has('register'))
              <li class="">
                  <a class="" href="{{ route('register') }}">
                    {{ __('Register') }}
                  </a>
              </li>
          @endif
        @else
          <li>
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#' data-target='dropdown2'>
              {{ Auth::user()->name }}
            </a>
            <!-- End-Dropdown Trigger -->
          </li>
          <!-- <li>
            <a href="#!">
            Another-Link
            </a>
          </li> -->
        @endguest
    <!-- . -->
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- Dropdown Structure -for-Main-navbar -->
    <ul id='dropdown1' class='dropdown-content'>
      <li>
        <a href="/home">Profile</a>
      </li>
      <li>
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>

    </ul>
  <!-- End - Dropdown Structure -->
  <!-- Dropdown Structure -for-SIDE-navbar -->
    <ul id='dropdown2' class='dropdown-content'>
      <li>
        <a href="/home">Profile</a>
      </li>
      <li>
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      <!-- <li>
        <a href="#">Another link</a>
      </li> -->
    </ul>
  <!-- End - Dropdown Structure -->

  @yield('content')

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Anywhere-Todo</h5>
          <p class="grey-text text-lighten-4">
            “You will never find time for anything. If you want time, you must make it.”
            <br>
            - <strong>Charles Brixton</strong>
          </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Quick Links</h5>
          <ul>
            <li><a class="white-text" href="{{ url('/') }}">Home</a></li>
            <li><a class="white-text" href="/home">Manage Tasks</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li>
              <a class="white-text" href="https://twitter.com/MuikiaAllan" target="_blank">
                Twitter: Muikia Allan
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <!-- Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> -->
      Made by
      <a target="_blank" href="https://twitter.com/MuikiaAllan" class="brown-text text-lighten-3">
        Muikia Allan
      </a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- <script src="js/materialize.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha256-U/cHDMTIHCeMcvehBv1xQ052bPSbJtbuiw4QA9cTKz0=" crossorigin="anonymous"></script>
  <script src="/js/init.js"></script>
  <!--  HTML::script('js/script.js')  -->
  <!-- <link rel="stylesheet" href="URL::asset('assets/css/bootstrap.min.css')"> -->

  </body>
</html>
