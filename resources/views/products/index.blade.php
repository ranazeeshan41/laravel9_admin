@extends('layouts.app')

@section('content')

    <div class="app-content">
        <div class="side-app">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Products</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">list</li>
                    </ol>
                </div>
                <div class="ml-auto pageheader-btn">

                    <a href="{{ route('products.create') }}" class="btn btn-secondary btn-icon text-white">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Product
                    </a>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table1" class="table table-striped table-bordered text-nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">Sr</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Details</th>
                                        <th class="wd-10p">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->detail }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                   {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>--}}
                                                    @can('product-edit')
                                                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                                    @endcan


                                                    @csrf
                                                    @method('DELETE')
                                                    @can('product-delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- TABLE WRAPPER -->
                    </div>
                    <!-- SECTION WRAPPER -->
                </div>
            </div>
            <!-- ROW-1 CLOSED -->

        </div>
    </div>

@endsection
