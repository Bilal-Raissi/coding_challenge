@extends('layout')

@section('content')
    <h1>List of tasks</h1>
    <a class="btn btn-success mb-2" href="{{ route('tasks.create') }}">Add task</a>
    <table class="table table-bordered">
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Completed</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->name }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->completed  }}</td>
        <td>
        <form action="{{ route('tasks.destroy',$task->id) }}" method="Post">
        <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
@endsection