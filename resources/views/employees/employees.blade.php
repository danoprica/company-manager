@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Employees</h3>
        <br>
        <table class="table table-bordered">
            <tr class>
                <td>Name</td>
                <td>Assigned project</td>
                <td>Actions</td>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee['name']}}</td>
                <td>
                    @if($employee['project_id'] === NULL)
                        Not assigned
                    @else
                        @php
                            $id = $employee['project_id'];
                        @endphp
                        @foreach($projects as $project)
                            @if($id == $project['id'])
                                {{$project['name']}}
                            @endif
                        @endforeach
                    @endif
                </td>
                <td>
                    <div>
                    <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                        <a href="{{route('employee.edit', ['employee' => $employee])}}" type="button" class="btn btn-primary">Edit</a>
                    </form>
                    </div>

                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{route('employee.create')}}" type="button" class="btn btn-success">New employee</a>
    </div>

@endsection
