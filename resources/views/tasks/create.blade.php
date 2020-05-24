@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Add New Task</h1>
        </div>
    
        <div class="panel-body">

<form action="/tasks" method="post">
{{ csrf_field() }}

<div class="form-group">
    <label for="title"> Task Title</label>
    <input type="text" class="form-control" id="taskTitle" name="title">
</div>

<div class="form-group">
    <label for="description">Task Description</label>
    <input type="text" class="form-control" id="taskDescription" name="description">
  </div>

  @if ($errors->any())

  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>              
          @endforeach
      </ul>
  </div>
      
  @endif

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
</div>
    
@endsection