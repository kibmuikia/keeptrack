@extends('masterLayout')

@section('title', 'Todo | Create')

@section('pageHeading')
Create A Task
@endsection

@section('content')
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

@endsection
