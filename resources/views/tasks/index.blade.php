@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tasks Home</div>
                <div class="card-body">
                    <div>
                      <ul>
                          @foreach( $tasks as $task )
                              <li>{{ $task->title }}</li>
                          @endforeach
                      </ul>
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

