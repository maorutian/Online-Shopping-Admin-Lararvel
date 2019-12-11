@extends('layout.admin.product_master')

@section('product_content')
    <div class="col-md-10">
        <div class="page_header"><h3>Update Category</h3></div>

        <!--form-->
        <form action="{{route('category.update',['category'=>$category])}}" class="uesr_search" method="post">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $category->name)}}">
                <p class="error">{{$errors->first('name')}}</p>
            </div>
            <button type="submit" class="btn btn-default">Update Category</button>
        </form>
    </div>
@endsection



