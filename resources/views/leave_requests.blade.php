@extends('master')

@section('content')

<div class="container">
    <h1>Leave Requests</h1>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th>Reason</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach($leaveRequests as $employee => $employeeLeaveRequest)
                    <tr>
                        <td colspan="5" style="text-align: center">
                            <strong>{{$employee}}</strong>
                        </td>
                    </tr>
                    @forelse($employeeLeaveRequest as $leaveRequest)
                    <tr>
                        <td>{{$leaveRequest['id']}}</td>
                        <td>{{$leaveRequest['date_from']}}</td>
                        <td>{{$leaveRequest['date_to']}}</td>
                        <td>{{$leaveRequest['reason']}}</td>
                        <td>{{$leaveRequest['status']}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center">No leave requests yet.</td>
                    </tr>
                    @endforelse
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection