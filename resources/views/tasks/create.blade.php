@extends('layouts.app2')

@section('content')

<div class="container jazaHeight">
    <div class="section">

        <div class="row">
          <div class="col s12">

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Create A Task</span>
                    <div>
                      <form action="/tasks" method="POST">
                        {{ csrf_field() }}
                        <div>
                          <input type="text" name="title" placeholder="Task Title">
                        </div>
                        <div>
                          <input type="text" name="description" placeholder="Task Description">
                        </div>
                        <div>
                          <button type="submit" name="submitNewTaskBtn">Create Task</button>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="card-action">
                  <a href="/tasks">View Tasks</a>
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

@endsection

