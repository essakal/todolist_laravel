@extends('master')
@section('title', 'index')
@section('content')
<a href="{{ route("todo.create") }}">create</a>
    <table>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->todo }}</td>
                <td>{{ $d->created_at }}</td>
                <td><a href="#">edit</a></td>
                <td><a href="#">delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection
