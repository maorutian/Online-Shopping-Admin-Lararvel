@extends('layout.admin.employee_master')
@section('employee_content')
    <div class="col-md-10">

        <div class="page_header"><h3>Reset Password</h3></div>
        <ul class="nav nav-tabs">
            <li><a href="{{route('employees')}}">All</a></li>
            <li class="active"><a href="#">{{$employee->first_name}} {{$employee->last_name}}</a></li>
        </ul>

        <!--form-->
        <form action="{{route('employee_update_pwd',['id'=>$employee->id])}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <fieldset disabled="disabled">
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" class="form-control" value="{{$employee->first_name}}">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" name="last_name" class="form-control" value="{{$employee->last_name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{$employee->email}}">
                </div>
            </fieldset>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="">
                <p class="error">{{$errors->first('password')}}</p>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" value="">
            </div>

            <button type="submit" class="btn btn-default">Save</button>
        </form>
        <!--form-->

    </div>
@endsection
