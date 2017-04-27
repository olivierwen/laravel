@extends('layout')
@section('content')
<table>
    <tr>
        <td>Id</td><td>Name</td><td>Duration</td>
    </tr>
    <tr>
        <td>{{ $task['id'] }}</td><td>{{ $task['name'] }}</td><td> {{ $task['duration'] }}</td>
    </tr>
</table>
@endsection