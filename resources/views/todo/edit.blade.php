@extends('master')
@section('title', 'edit todo')
@section('content')
{{-- {{ dd($data) }} --}}
    <div>
        <form action="{{ route('todo.update', $data->id) }}" method="POST">
            @csrf
            <input type="text" name="todo" id="todo" value="{{ $data->todo }}">
            @error('todo')
                <div>{{ $message }}</div>
            @enderror
            <input type="submit">
        </form>
    </div>
@endsection
