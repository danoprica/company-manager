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
                        {{$employee['project_id']}}
                    @endif
                </td>
                <td>
                    <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{route('employee.create')}}" type="button" class="btn btn-success">New employee</a>
    </div>

@endsection
