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

                <div class="card mt-3 bg-white">
                    <div class="card-header">
                        <h4>Permissions
                            @can('create permission')
                            <a href="{{ url('permissions/create') }}" class="btn btn-success text-white fw-semibold float-end">Add Permission</a>
                            @endcan
                        </h4>
                    </div>
                    <div class="card-body p-4">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th width="40%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($results))
                                @foreach ($results as $value)
                                <tr>
                                    <th colspan="3" class="text-start"><span class="text-black">Menu:</span> <span class="text-red-600">{{ $value[0]->group_name }}</span></th>
                                </tr>
                                    @foreach($value as $key => $permission)
                                    <tr>
                                        <td class="align-middle">{{ ++$key }}</td>

                                        <td>{{ $permission->name }}</td>

                                        <td>
                                            @can('update permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn btn-success">Edit</a>
                                            @endcan

                                            @can('delete permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection
