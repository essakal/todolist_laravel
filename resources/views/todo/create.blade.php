@extends('master')
@section('title', 'create todo')
@section('content')
    <div>
        <form action="{{ route('todo.store') }}" method="POST">
            @csrf
            <input type="text" name="todo" id="todo" value="{{ old('todo') }}">
            @error('todo')
                <div>{{ $message }}</div>
            @enderror
            <input type="submit">
        </form>
    </div>
@endsection
