@extends('layouts.app')

@section('content')
    <div class="app-content">
        <div class="side-app">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Products</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">create</li>
                    </ol>
                </div>

            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- ROW-1 OPEN -->
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 card-title">Create Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Details</label>
                                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                    </div>
                                </div>

                            </div>

                            <a href="{{ route('products.index') }}" class="btn btn-info" data-acc-btn-prev="">Back</a><input type="submit" class="btn btn-primary float-right" value="Submit">

                        </div>
                    </div>
                </div><!-- COL END -->

            </div>
            </form>
            <!-- ROW-1 CLOSED -->

        </div>
    </div>

@endsection
