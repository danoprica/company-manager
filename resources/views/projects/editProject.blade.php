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
                <label class="pb-3">Name: </label>
                <input value="{{$project->name}}" type="text" name="name"/>
                <h5>Assign employees:</h5>
                @foreach($employees as $employee)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-employee-{{$employee['id']}}" {{$employee->project_id == $project->id ? 'checked' : '' }}>
                        <label class="form-check-label" for= "checkbox-employee-{{$employee['id']}}">
                            {{$employee['name']}}
                        </label>
                    </div>
                @endforeach
            </div>
            <br>
            <div>
                <input type="submit" value="Edit">
            </div>
        </form>
    </div>
@endsection
