@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Task</div>
                <div class="card-body">
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
</div>
@endsection

