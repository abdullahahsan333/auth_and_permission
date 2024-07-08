@extends('layouts.backend')

@section('content')

<div class="row mt-4">
    <div class="co-md-12">
        <nav>
            <a href="{{ url('roles') }}" class="btn btn-primary mx-1 text-white fw-semibold">Roles</a>
            <a href="{{ url('permissions') }}" class="btn btn-info mx-1 text-white fw-semibold">Permissions</a>
            <a href="{{ url('users') }}" class="btn btn-warning mx-1 text-white fw-semibold">Users</a>
        </nav>
    </div>
</div>

<div class="row mt-2 mb-4">
    <div class="col-md-12">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="card mt-3">
            <div class="card-header">
                <h4>
                    Roles
                    @can('create role')
                    <a href="{{ url('roles/create') }}" class="btn btn-primary text-white fw-semibold float-end">Add Role</a>
                    @endcan
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th width="40%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-warning">
                                    Add / Edit Role Permission
                                </a>

                                @can('update role')
                                <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">
                                    Edit
                                </a>
                                @endcan

                                @can('delete role')
                                <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">
                                    Delete
                                </a>
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
