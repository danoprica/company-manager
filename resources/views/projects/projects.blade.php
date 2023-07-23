@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Projects</h3>
        <br>
        <table class="table table-bordered">
            <tr class>
                <td>Project name</td>
                <td>Assigned employees</td>
                <td>Actions</td>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project['name']}}</td>
                    <td>
                       @foreach($employees as $employee)
                            @if($employee->project_id == $project->id)
                                {{$employee['name']}}
                            @endif
                       @endforeach
                    </td>
                    <td>
                        <form method="post" action="{{route('project.delete', ['project' => $project])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                            <a href="{{route('project.edit', ['project' => $project])}}" type="button" class="btn btn-primary">Edit</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{route('project.create')}}" type="button" class="btn btn-success">New project</a>
    </div>
@endsection
