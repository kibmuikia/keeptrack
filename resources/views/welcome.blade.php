@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Karibu to Anywhere-Todo</div>
                <div class="card-body">
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
