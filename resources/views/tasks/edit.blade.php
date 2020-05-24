@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Edit Task</h1>
        </div>
    
        <div class="panel-body">

<form action="{{url('tasks', [$task->id])}}" method="post">
<input type="hidden" name="_method" value="PUT">

{{ csrf_field() }}

<div class="form-group">
    <label for="title">Task Title</label>
<input type="text" name="title" id="taskTitle" class="form-control" value="{{$task->title}}">
    </div>

    <div class="form-group">
        <label for="description">Task Title</label>
        <input type="text" name="description" id="taskDescription" class="form-control" value="{{$task->description}}">
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{$errror}}</li>            
        @endforeach</ul>    
    </div>        
    @endif

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
</div>
@endsection