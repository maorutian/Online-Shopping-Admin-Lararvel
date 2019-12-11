@extends('layout.admin.employee_master')
@section('employee_content')

    <div class="col-md-10">

        <div class="page_header"><h3>Edit Employee</h3></div>
        <ul class="nav nav-tabs">
            <li><a href="{{route('employees')}}">All</a></li>
            <li class="active"><a href="#">{{$employee->first_name}} {{$employee->last_name}}</a></li>
        </ul>

        <!--form-->
        <form action="{{route('employee_update',['id'=>$employee->id])}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $employee->first_name)}}">
                <p class="error">{{$errors->first('first_name')}}</p>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') ? old('last_name') : $employee->last_name }}">
                <p class="error">{{$errors->first('last_name')}}</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') ? old('email') : $employee->email }}">
                <p class="error">{{$errors->first('emails')}}</p>
            </div>

            <button type="submit" class="btn btn-default">Save</button>
        </form>
        <!--form-->

    </div>
@endsection
