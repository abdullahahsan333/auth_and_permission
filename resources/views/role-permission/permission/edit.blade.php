@extends('layouts.backend')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Permission
                            <a href="{{ url('permissions') }}" class="btn btn-danger text-white fw-semibold float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('permissions/'.$permission->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="">Group Name</label>
                                <input type="text" placeholder="Group Name" name="group_name" value="{{ $permission->group_name }}" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Permission Name</label>
                                <input type="text" placeholder="Permission Name" name="name" value="{{ $permission->name }}" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn text-white fw-semibold btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
