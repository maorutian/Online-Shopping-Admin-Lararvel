@extends('layout.admin.product_master')

@section('product_content')
    <div class="col-md-10">
        <div class="page_header"><h3>All Category</h3></div>

        <!--table-->
        <table class="table table-hover myTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td>
                        <ul class="nav nav-pills">
                            <li role="presentation"><a href="category/{{ $c->id }}/edit">Edit</a></li>
                            <li role="presentation"><a href="category/deleting/{{$c->id}} ">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
{{--    {{$categories->links()}}--}}
    <!--table-->
    </div>
@endsection

