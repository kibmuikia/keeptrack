@extends('layouts.app2')

@section('content')

<div class="container jazaHeight">
    <div class="section">

        <div class="row">
          <div class="col s12">

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Tasks Home</span>
                    <div>
                      <ul>
                          @foreach( $tasks as $task )
                              <li>{{ $task->title }} <p>  <a href="/tasks/{{ $task->id }}/edit">Edit</a> </p> </li>
                          @endforeach
                      </ul>
                    </div>
                </div>
                <div class="card-action">
                  <a href="/tasks/create">New Task</a>
                  <!--<a href="#">This is a link</a>-->
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

@endsection

