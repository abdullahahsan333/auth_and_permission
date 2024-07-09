@extends('layouts.backend')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Role : {{ ucwords(str_replace('-',' ',$role->name)) }}
                            <a href="{{ url('roles') }}" class="btn btn-danger text-white fw-semibold float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('roles/'.$role->id.'/give-permissions') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                @error('permission')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                @foreach ($permissions as $value)
                                    <div class="row my-3">
                                        <div class="col-md-2">
                                            <lable class="label-control fs-18">
                                                {{ $value[0]->group_name }}
                                            </lable>
                                        </div>
                                        @foreach ($value as $permission )
                                            <div class="col-md-2">
                                                <label class="label-control" for="{{ str_replace(" ","",ucwords(trim($permission->name))) }}">
                                                    <input type="checkbox" name="permission[]" id="{{ str_replace(" ","",ucwords(trim($permission->name))) }}" value="{{ $permission->name }}" {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }} />
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary text-white fw-semibold">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
