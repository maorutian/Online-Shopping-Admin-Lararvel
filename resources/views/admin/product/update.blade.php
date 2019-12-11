@extends('layout.admin.product_master')

@section('product_content')


    <div class="col-md-10">


        <div class="page_header"><h3>Edit Product</h3></div>
        <ul class="nav nav-tabs">
            <li><a href="{{route('products')}}">All</a></li>
            <li class="active"><a href="#">{{$product->name}}</a></li>
        </ul>


        <!--form-->
        <form action="{{route('product_update',[ 'id' => $product->id ])}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name',$product->name) }}">
                <p class="error">{{$errors->first('name')}}</p>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="{{ old('price',$product->price) }}">
                <p class="error">{{$errors->first('price')}}</p>
            </div>
            <div class="form-group">
                <label for="picture">Picture URL</label>
                <input type="text" name="picture" class="form-control" value="{{ old('picture',$product->picture) }}">
                <p class="error">{{$errors->first('picture')}}</p>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $id => $name)
                        <option value="{{$id}}"
                        @if(old('category_id')==$id) {{ 'selected' }} @elseif($product->category_id == $id) {{'selected'}} @endif
                        >{{$name}}</option>
                    @endforeach
                </select>
                <p class="error">{{$errors->first('category_id')}}</p>
            </div>

            <button type="submit" class="btn btn-default">Save</button>
        </form>
        <!--form-->

    </div>
@endsection


