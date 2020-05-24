@extends('layouts.app')

@section('content')

@if(Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>My Tasks</h1>
        </div>
    
        <div class="panel-body">
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Title</th>
            <th scope="col">Task Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td><a href="/tasks/{{ $task->id }}">{{$task->title}}</a></td>
            <td>{{$task->description}}</td>
            <td>{{ $task->created_at->toFormattedDateString() }}</td>
            <td>
                <div class="form form-inline">
                    <a href="{{ URL::to('tasks/'.$task->id.'/edit')}}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                    <form action="{{url('tasks', [$task->id])}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection