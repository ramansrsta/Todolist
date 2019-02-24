@extends('layouts.app')

@section('content')
    <a href='/todolist/public' class="btn btn-default"> Go Back </a>
    <h1>
        <a href="todo/{{$todo->id}}"> {{$todo->text}} </a>
    </h1>

    <span class="badge badge-danger"> {{$todo->due}} </span>
    <hr>
    <p> {{$todo->body}} </p>

    <br><br>
    <a href="/todolist/public/todo/{{$todo->id}}/edit" class="btn btn-primary"> Edit </a>

    {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method' => 'POST','class'=>'float-right']) !!}
        {{ Form::hidden('_method','DELETE') }}    
        {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection

