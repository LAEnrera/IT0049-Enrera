@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<div class="card">
    <h1>User Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['role'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection