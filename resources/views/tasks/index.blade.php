@extends('layout')
@section('content')

<a href="{{ route('tasks.create') }}">New task</a>
<table>
    <tr>
        <td>Id</td><td>Name</td>
    </tr>

@foreach($tasks as $task)
    <tr>
        <td><a href="{{ route('tasks.show', ['id' => $task['id']]) }}">{{ $task['id'] }}</a></td><td>{{ $task['name'] }}</td>
    </tr>
@endforeach
</table>
@endsection