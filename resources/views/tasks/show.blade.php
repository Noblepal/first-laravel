@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Showing Task: {{ $task->title }}</h1>
        </div>
    
        <div class="panel-body">
            <p>
                <strong>Task Title: </strong> {{ $task->title }} <br>
                <strong>Task Description: </strong> {{ $task->description }}
            </p>
        </div>
    </div>
</div>

@endsection