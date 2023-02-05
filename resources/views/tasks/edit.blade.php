@extends('layout')

@section('content')
    <h1>Edit task</h1>
    <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        @include('tasks.form')
        <button class="btn btn-success w-100 mt-3" type="submit">Update</button>
    </form>
@endsection