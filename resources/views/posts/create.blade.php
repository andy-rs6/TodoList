@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::label('title', 'Due date')}}
        
        <input type="date" name="due_date" class="form-control">
        <br>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection   