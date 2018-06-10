@extends('master')

@section('content')

<div class="container">
    <h1>Employees</h1>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td><a href="{{route('employeeDetails', $employee['id'])}}">{{$employee['id']}}</a></td>
                        <td>{{$employee['first_name']}}</td>
                        <td>{{$employee['last_name']}}</td>
                        <td>{{$employee['email']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection