@extends('master')

@section('content')

<div class="container">
    <h1>Time Logs</h1>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Task</th>
                    <th>Project</th>
                    <th>Date</th>
                    <th>Logged Time (hrs)</th>
                </thead>
                <tbody>
                    @forelse($timeLogs as $timeLog)
                    <tr>
                        <td>{{$timeLog['id']}}</td>
                        <td>{{$timeLog['task']}}</td>
                        <td>{{$timeLog['project']}}</td>
                        <td>{{$timeLog['date']}}</td>
                        <td>{{$timeLog['time']}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center">No time logs yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection