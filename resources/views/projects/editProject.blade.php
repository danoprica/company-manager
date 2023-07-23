@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Edit project</h3>
        <br>
        <form method="post" action="{{route('project.update', ['project' => $project])}}">
            @csrf
            @method('put')
            <div>
                <label>Name: </label>
                <input value="{{$project->name}}" type="text" name="name"/>
            </div>
            <br>
            <div>
                <input type="submit" value="Edit">
            </div>
        </form>
    </div>
@endsection
