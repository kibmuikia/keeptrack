@extends('layouts.app2')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Task</div>
                <div class="card-body">

                    <div>
                        <ul>
                            <li>
                                <a href="/tasks/create">New Task</a>
                            </li>
                            <li>
                                <a href="/about">About Todo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container jazaHeight">
    <div class="section">

        <div class="row">
          <div class="col s12">

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Tasks Home</span>

                    <div>
                        <form action="/tasks/{{ $taskToEdit->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div>
                          <input type="text" name="title" placeholder="Task Title" value="{{ $taskToEdit->title }}">
                        </div>
                        <div>
                          <input type="text" name="description" placeholder="Task Description" value="{{ $taskToEdit->description }}">
                        </div>
                        <div>
                          <button type="submit" name="submitEdit">Edit Task</button>
                        </div>
                      </form>
                    </div>
                    <div>
                        <form action="/tasks/{{ $taskToEdit->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div>
                          <button type="submit" name="submitEdit">Delete Task</button>
                        </div>
                      </form>
                    </div>

                </div>
                <div class="card-action">
                  <a href="/tasks">View Your Tasks</a>
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

@endsection

