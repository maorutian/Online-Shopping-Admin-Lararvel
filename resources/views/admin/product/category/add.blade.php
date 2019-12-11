@extends('layout.admin.product_master')

@section('product_content')
    <div class="col-md-10">
        <div class="page_header"><h3>Create a New Category</h3></div>

        <!--form-->
        <form action="{{route('category.store')}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                <p class="error">{{$errors->first('name')}}</p>
            </div>
            <button type="submit" class="btn btn-default">Create Category</button>
        </form>
    </div>
@endsection



