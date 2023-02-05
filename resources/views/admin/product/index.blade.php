@extends('admin.master')

@section('body')

    <section class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card border-dark shadow">
                        <div class="card-header display-6 font-monospace text-center bg-light">Add Blog Form</div>
                        <div class="card-body">
                            <p class="text-success text-center fw-bold shadow">{{Session::get('message')}}</p>
                            <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input rows="5" class="form-control" name="category_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input rows="5" class="form-control" name="brand_name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" name="description"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" checked value="1" name="status"/> Published</label>
                                        <label><input type="radio" value="0" name="status"/> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Create New Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
