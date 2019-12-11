@extends('layout.admin.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="{{ route('products') }}" class="list-group-item">All Products</a>
                    <a href="{{ route('product_new') }}" class="list-group-item">Add product</a>
                    <a href="{{ route('category.index') }}" class="list-group-item">All Categories</a>
                    <a href="{{ route('category.create') }}" class="list-group-item">Add Category</a>
                </div>
            </div>

                <section>
                    @yield('product_content')
                </section>

            </div>
        </div>


@endsection
