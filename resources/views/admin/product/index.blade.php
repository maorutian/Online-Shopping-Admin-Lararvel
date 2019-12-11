@extends('layout.admin.product_master')

@section('product_content')
    <div class="col-md-10">
        <div class="page_header"><h3>All Products</h3></div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{route('products')}}">All</a></li>
        </ul>
        <!--table-->
        <table class="table table-hover myTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <ul class="nav nav-pills">
                            <li role="presentation"><a href="{{ route('product_detail', ['id' => $product->id ]) }}">View</a></li>
                            <li role="presentation"><a href="{{ route('product_update', ['id' => $product->id ]) }}">Edit</a></li>
                            <li role="presentation"><a href="{{ route('product_delete', ['id' => $product->id ]) }}">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
{{--        {{$products->links()}}--}}
        <!--table-->
    </div>
@endsection

