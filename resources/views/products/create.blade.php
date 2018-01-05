@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                        </div>
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="number" name="price" class="form-control" value="{{ old('price')}}">
                        </div>
                        <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="availability">Availability</label>
                          <input type="text" name="availability" class="form-control" value="{{ old('availability')}}">
                        </div>
                        <div class="form-group">
                          <label for="brand">Brand</label>
                          <input type="text" name="brand" class="form-control" value="{{ old('brand')}}">
                        </div>
                        <div class="form-group">
                          <label for="productcode">Product Code</label>
                          <input type="text" name="productcode" class="form-control" value="{{ old('productcode')}}">
                        </div>

                        <div class="form-group">
                            <button class="form-control btn btn-success">Save Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
