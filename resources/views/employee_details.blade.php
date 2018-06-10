@extends('master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <h1>Employee #{{$employee['id']}}</h1>
            <p><strong>First Name:</strong> {{$employee['first_name']}}</p>
            <p><strong>Last Name:</strong> {{$employee['last_name']}}</p>
            <p><strong>Email:</strong> {{$employee['email']}}</p>
            <div class="links">
                <a href="{{route('employeeLeaveRequests', $employee['id'])}}">Leave Requests</a>
                <a href="{{route('employeeTimeLogs', $employee['id'])}}">Time Logs</a>
            </div>
        </div>
    </div>
</div>

@endsection