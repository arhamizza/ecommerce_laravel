@extends('layout.atmin')
@section('title', 'Registered User')
@section('contents')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Registered User</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>{{ $item->role_as == '0'?'User':'Admin'}}</td>
                            <td>
                                <a href="{{ url('view-users/'.$item->id)}}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
