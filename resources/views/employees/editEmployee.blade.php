@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Edit employee</h3>
        <br>
        <form method="post" action="{{route('employee.update', ['employee' => $employee])}}">
            @csrf
            @method('put')
            <div>
                <label>Name: </label>
                <input value="{{$employee->name}}" type="text" name="name"/>
            </div>
            <br>
            <div>
                <label>Assigned project: </label>
                <select name="project_id">
                    <option value="" {{$employee->project_id == NULL ? 'selected' : ''}}>Not assigned</option>
                    @foreach($projects as $project)
                        <option value="{{$project['id']}}" {{$project->id == $employee->project_id ? 'selected' : ''}}> {{$project['name']}} </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Edit">
            </div>
        </form>
    </div>
@endsection
