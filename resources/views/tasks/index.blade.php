@extends('masterLayout')

@section('title', 'Todo | Tasks')

@section('pageHeading')
Tasks Index Page
@endsection

@section('content')
<div>
<a href="/tasks/create">New Task</a>
</div>
<ul>
    @foreach( $tasks as $task )
        <li>{{ $task->title }}</li>
    @endforeach
</ul>

@endsection
