@extends('master')
@section('title', 'show page')
@section('content')
    <h1>show page</h1>
    <h1>id: {{ $data->id }}</h1>
    <h1>todo: {{ $data->todo }}</h1>
    <h1>create at: {{ $data->created_at }}</h1>
    <h1>update at: {{ $data->updated_at }}</h1>
    <a href="{{ route('todo.index') }}">home</a>
@endsection