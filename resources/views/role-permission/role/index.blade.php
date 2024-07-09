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

        <div class="card mt-4 bg-white">
            <div class="card-header px-4 d-flex justify-content-between align-items-center">
                <h4 class="m-0">Roles</h4>
                @can('create role')
                    <a href="{{ url('roles/create') }}" class="btn btn-primary text-white fw-semibold float-end">Add Role</a>
                @endcan
            </div>
            <div class="card-body p-4">
                <table class="table table-bordered table-striped m-0 align-middle">
                    <thead>
                        <tr class="table-primary">
                            <th width="5%" class="text-center">Id</th>

                            <th>Roles Name</th>

                            <th width="25%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td class="text-center">{{ $role->id }}</td>

                            <td>{{ ucwords(str_replace('-',' ',$role->name)) }}</td>

                            <td class="text-center">
                                @can('add and edit permission')
                                    <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn text-white fw-semibold btn-secondary">
                                        Add/Edit Permission
                                    </a>
                                @endcan

                                @can('update role')
                                    <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn text-white fw-semibold btn-success">
                                        Edit
                                    </a>
                                @endcan

                                @can('delete role')
                                    <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn text-white fw-semibold btn-danger mx-2">
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
