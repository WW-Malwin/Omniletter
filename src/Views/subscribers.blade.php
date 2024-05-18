@extends('plugin-layout')
@section('content')
    <h1>Subscribers</h1>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber['email'] }}</td>
                    <td>{{ $subscriber['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection