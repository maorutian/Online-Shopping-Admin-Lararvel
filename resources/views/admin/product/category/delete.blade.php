@extends('layout.admin.product_master')

@section('product_content')

    <div class="col-md-10">
        <div class="page_header"><h3>Delete Category</h3></div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">{{$category->name}}</a></li>
        </ul>
        <!--alter-->
        <div class="col-md-12" id="delete_info">
            <form action="{{route('category.destroy',[ 'category' => $category ])}}" method="post">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <h4>Delete information</h4>
                    <p>Are you sure you want to delete this category?</p>
                    <h4>{{$category->name}}</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <p>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-default" data-dismiss="alert">cancel</button>
                    </p>
                </div>
            </form>
        </div>
        <!--alter-->
    </div>
@endsection




