@extends('layouts.app')

@section('content')

    <div class="app-content">
        <div class="side-app">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Roles Management</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Roles</a></li>
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
            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Create Role</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Permission</label>
                                        @foreach($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                {{ $value->name }}</label>
                                            <br/>
                                        @endforeach
                                    </div>
                                </div>
                        </div>
                            <a href="{{ route('roles.index') }}" class="btn btn-info" data-acc-btn-prev="">Back</a><input type="submit" class="btn btn-primary float-right" value="Submit">
                    </div>
                </div><!-- COL END -->
                {!! Form::close() !!}
            </div>
            <!-- ROW-1 CLOSED -->

        </div>
    </div>




@endsection
