@extends('masterLayout')

@section('title', 'Todo | About')

@section('pageHeading')
About Todo
@endsection

@section('content')
<h5>{{ $text }}</h5>
<ul>
    @foreach( $contacts as $contact )
        <li>{{ $contact }}</li>
    @endforeach
</ul>

@endsection