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
                        <h4>Create User
                            <a href="{{ url('users') }}" class="btn btn-danger text-white fw-semibold float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">Name</label>

                                <input type="text" placeholder="Name" name="name" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Email</label>

                                <input type="text" placeholder="Email" name="email" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>

                                <input type="text" placeholder="********" name="password" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Roles</label>

                                <select name="roles[]" class="form-control" multiple>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn text-white fw-semibold btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
