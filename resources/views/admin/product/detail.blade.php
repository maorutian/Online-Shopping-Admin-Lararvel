@extends('layout.admin.product_master')

@section('product_content')

    <div class="col-md-10">
        <div class="page_header"><h3>View Product</h3></div>
        <ul class="nav nav-tabs">
            <li><a href="{{route('products')}}">All</a></li>
            <li class="active"><a href="#">{{$product->name}}</a></li>
        </ul>

        <!--disabled form-->
        <fieldset disabled="disabled">
            <form class="uesr_search">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <p><img src="{{$product->picture}}" alt="picture" height="90"></p>
                </div>
                <div class="form-group">
                    <label for="picture">Price</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <input type="text" name="category_id" class="form-control" value="{{$product->category->name}}">
                </div>
            </form>
        </fieldset>
        <!--disabled form-->

    </div>

@endsection



