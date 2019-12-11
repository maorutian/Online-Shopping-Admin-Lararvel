@extends('layout.admin.product_master')

@section('product_content')
    <div class="col-md-10">
        <div class="page_header"><h3>Create a New Product</h3></div>

        <!--form-->
        <form action="{{route('product_new')}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                <p class="error">{{$errors->first('name')}}</p>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                <p class="error">{{$errors->first('price')}}</p>
            </div>
            <div class="form-group">
                <label for="picture">Picture URL</label>
                <input type="text" name="picture" class="form-control" value="{{old('picture')}}">
                <p class="error">{{$errors->first('picture')}}</p>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="category">Category</label>--}}
{{--                <input type="text" name="category_id" class="form-control" value="{{old('category-Id')}}">--}}
{{--                <p class="error">{{$errors->first('category_id')}}</p>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" class="form-control">
                @foreach($categories as $id => $name)
                    <option value="{{$id}}"
                    @if(old('category_id')==$id) {{ 'selected' }} @endif
                     >{{$name}}</option>
                @endforeach
                </select>
                <p class="error">{{$errors->first('category_id')}}</p>
            </div>
            <button type="submit" class="btn btn-default">Create Product</button>
        </form>
    </div>
@endsection



