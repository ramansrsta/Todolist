@extends('layouts.app')

@section('content')
    <a href='/todolist/public' class="btn btn-default"> Go Back </a>
    <h1>
        <a href="todo/{{$todo->id}}"> {{$todo->text}} </a>
    </h1>

    <span class="badge badge-danger"> {{$todo->due}} </span>
    <hr>
    <p> {{$todo->body}} </p>
@endsection

