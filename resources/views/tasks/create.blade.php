@extends('layout')
@section('content')
<form method="POST" action="{{ route('tasks.store') }}">
    {{ csrf_field() }}
    <div  class="form-group">
        <label for="name">Tâche : </label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Task name" value="{{ old('name')}}"/>
        <button type="submit" class="btn btn-primary" >Créer tâche</button>
    </div>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection