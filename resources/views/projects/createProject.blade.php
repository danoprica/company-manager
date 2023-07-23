@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3>Create project</h3>
        <br>
        <form method="post" action="{{route('project.store')}}">
            @csrf
            @method('post')
            <div>
                <label>Project name: </label>
                <input type="text" name="name"/>
            </div>
            <br>

            <br>
            <div>
                <input type="submit" value="Add project">
            </div>
        </form>
    </div>
@endsection
