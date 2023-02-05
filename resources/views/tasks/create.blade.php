@extends('layout')

@section('content')
    <h1>New task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">        
        @csrf
        @include('tasks.form')
        <button class="btn btn-success w-100 mt-3" type="submit">Add</button>
    </form>
@endsection