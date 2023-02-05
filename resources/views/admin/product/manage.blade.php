@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-dark shadow">
                        <div class="card-header display-6 font-monospace text-center bg-light">All Product Information</div>
                        <div class="card-body">
                            <p class="text-success text-center fw-bold display-6 shadow">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Category_name</th>
                                    <th>Brand_name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->iteration }}</td>
                                        <td>{{ $product->name }}</td>

                                        <td><img src="{{ asset( $product->image) }}" alt="" height="60" width="70"></td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{route('product.detail' , ['id' => $product->id])}} " class="btn btn-info btn-sm w-100 mb-1">
                                                <i class="fa fa-book-open"></i>
                                            </a>
                                            <a href="{{route('product.update-status' , ['id' => $product->id])}} " class="btn btn-primary btn-sm w-100 mb-1">
                                                <i class="fa fa-arrow-up"></i>
                                            </a>
                                            <a href="{{route('product.edit' , ['id' => $product->id])}} " class="btn btn-success btn-sm w-100 mb-1">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure to delete this?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
