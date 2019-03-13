@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create A Task</div>
                <div class="card-body">
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
                    <div>
                        <ul>
                            <li>
                                <a href="/tasks">View Tasks</a>
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
</div>
@endsection

