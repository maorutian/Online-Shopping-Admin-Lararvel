@extends('layout.admin.employee_master')
@section('employee_content')
    <div class="col-md-10">
        <div class="page_header"><h3>Delete Employees</h3></div>
        <ul class="nav nav-tabs">
            <li><a href="{{route('employees')}}">All</a></li>
            <li class="active"><a href="#">{{$employee->first_name}} {{$employee->last_name}}</a></li>
        </ul>
        <!--alter-->
        <div class="col-md-12" id="delete_info">
            <form action="{{route('employee_delete',['id'=>$employee->id])}}" method="post">
                {{csrf_field()}}
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <h4>Delete information</h4>
                    <p>Are you sure you want to delete this person?</p>
                    <h4>{{$employee->first_name}} {{$employee->last_name}}</h4>
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
