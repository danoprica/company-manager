@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Add employee</h3>
        <br>
        <form method="post" action="{{route('employee.store')}}">
            @csrf
            @method('post')
            <div>
                <label>Name: </label>
                <input type="text" name="name"/>
            </div>
            <br>
            <div>
                <label>Assigned project: </label>
                <select name="project_id">
                    <option value="">Not assigned</option>
                    @foreach($projects as $project)
                    <option value="{{$project['id']}}"> {{$project['name']}} </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Add employee">
            </div>
        </form>
    </div>
@endsection
