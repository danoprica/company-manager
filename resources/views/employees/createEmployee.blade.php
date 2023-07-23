@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Add employee</h3>
        <br>
        <form>
            <div>
                <label>Name: </label>
                <input type="text" name="name"/>
            </div>
            <br>
            <div>
                <label>Assigned project: </label>
                <select name="projects">
                    <option value="NULL">Not assigned</option>
                    @foreach($projects as $project)
                    <option value="{{$project['id']}}"> {{$project['name']}} </option>
                    @endforeach
                </select>
            </div>

        </form>
    </div>
@endsection
