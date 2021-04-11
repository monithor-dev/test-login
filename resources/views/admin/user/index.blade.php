@extends('layouts.app')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Users</h1>
    </div>

    <div class="container">
        <div class="card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Users List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Creado</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
