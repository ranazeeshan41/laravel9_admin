@extends('layouts.app')


@section('content')

    <div class="app-content">
        <div class="side-app">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Users</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">create</li>
                    </ol>
                </div>

            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <!-- ROW-1 OPEN -->
            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">Create User</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Role</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>

                            </div>
                        </div>

                        <a href="{{ route('users.index') }}" class="btn btn-info" data-acc-btn-prev="">Back</a><input type="submit" class="btn btn-primary float-right" value="Submit">

                </div>
            </div>
        </div><!-- COL END -->
        {!! Form::close() !!}
    </div>
    <!-- ROW-1 CLOSED -->

        </div>
    </div>
@endsection
