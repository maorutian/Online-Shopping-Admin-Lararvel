@extends('layout.admin.product_master')

@section('product_content')

    <div class="col-md-10">
        <div class="page_header"><h3>Search Product</h3></div>

        <div id="search-area">

            <form id="search-form" action="">
                {{csrf_field()}}
                <input id="search" type="text" name="q" value=""/>
                <input type="submit" value="Search"/>
{{--                <button id="search_submit" name="submit">Search</button>--}}
            </form>

            <ul id="suggestions">
            </ul>

        </div>

    </div>

@endsection

@section('js')
    <script src="/js/search.js"></script>
@endsection('js)
