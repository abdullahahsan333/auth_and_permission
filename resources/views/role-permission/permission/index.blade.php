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
                <h4 class="m-0">Permissions</h4>
                @can('create permission')
                    <a href="{{ url('permissions/create') }}" class="btn btn-success text-white fw-semibold float-end">Add Permission</a>
                @endcan
            </div>
            <div class="card-body p-4">
                <table class="table table-bordered table-striped m-0 align-middle">
                    @if(!empty($results))
                        <thead>
                            <tr class="table-primary">
                                <th width="15%">Group Name</th>

                                <th>Permission Name</th>

                                <th width="15%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        @foreach ($results as $items => $value)
                            <tbody>
                                @foreach($value as $key => $permission)
                                <tr>
                                    <td>
                                        <strong class="text-black">{{ ucwords(str_replace('-',' ',$items)) }}</strong>
                                    </td>

                                    <td>{{ ucwords(str_replace('-',' ',$permission->name)) }}</td>

                                    <td class="text-center">
                                        @can('update permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn text-white fw-semibold btn-success">Edit</a>
                                        @endcan

                                        @can('delete permission')
                                            <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="btn text-white fw-semibold btn-danger mx-2">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
