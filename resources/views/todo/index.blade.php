@extends('master')
@section('title', 'index')
@section('content')
    <a href="{{ route('todo.create') }}">create</a>
    <table>
        @foreach ($data as $d)
        <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->todo }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td><a href="{{ route("todo.edit", $d->id) }}">edit</a></td>
                    <td><a href="{{ route("todo.delete", $d->id) }}">delete</a></td>
                    <td><a href="#">show</a></td>
                </tr>
        @endforeach
    </table>
@endsection
