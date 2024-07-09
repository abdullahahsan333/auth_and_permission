@extends('layouts.backend')

@section('content')

<div class="row mt-4">
    <div class="co-md-12">
        <nav>
            @can('view role')
                <a href="{{ url('roles') }}" class="btn btn-primary mx-1 text-white fw-semibold">Roles</a>
            @endcan

            @can('view permission')
                <a href="{{ url('permissions') }}" class="btn btn-info mx-1 text-white fw-semibold">Permissions</a>
            @endcan

            @can('view user')
                <a href="{{ url('users') }}" class="btn btn-success mx-1 text-white fw-semibold">Users</a>
            @endcan

        </nav>
    </div>
</div>

<div class="row mt-2 mb-4">
    <div class="col-md-12">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="card bg-white mt-4">
            <div class="card-header px-4 d-flex justify-content-between align-items-center">
                <h4 class="m-0">Users</h4>
                @can('create user')
                <a href="{{ url('users/create') }}" class="btn btn-primary text-white fw-semibold float-end">Add User</a>
                @endcan
            </div>
            <div class="card-body p-4">
                <table class="table table-bordered table-striped m-0 align-middle">
                    <thead>
                        <tr class="table-primary">
                            <th width="5%" class="text-center">Id</th>

                            <th>User Name</th>

                            <th>User Email</th>

                            <th width="15%" class="text-center">Roles</th>

                            <th width="15%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>

                            <td>{{ ucwords(str_replace('-',' ',$user->name)) }}</td>

                            <td>{{ $user->email }}</td>

                            <td class="text-center">
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $rolename)
                                        <label class="badge bg-primary px-4 py-2 fs-13">{{ ucwords(str_replace('-',' ',$rolename)) }}</label>
                                    @endforeach
                                @endif
                            </td>

                            <td class="text-center">
                                @can('update user')
                                    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn text-white fw-semibold btn-success">Edit</a>
                                @endcan

                                @can('delete user')
                                    <a href="{{ url('users/'.$user->id.'/delete') }}" class="btn text-white fw-semibold btn-danger mx-2">Delete</a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
