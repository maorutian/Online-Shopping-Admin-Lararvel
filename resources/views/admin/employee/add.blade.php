@extends('layout.admin.employee_master')
@section('employee_content')
    <div class="col-md-10">


        <div class="page_header"><h3>Create a New Employee</h3></div>

        <!--form-->
        <form action="{{route('employee_new')}}" class="uesr_search" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                <p class="error">{{$errors->first('first_name')}}</p>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                <p class="error">{{$errors->first('last_name')}}</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{old('emails')}}">
                <p class="error">{{$errors->first('emails')}}</p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="">
                <p class="error">{{$errors->first('password')}}</p>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" value="">
            </div>

            <button type="submit" class="btn btn-default">Create Employee</button>
        </form>
        <!--form-->

    </div>
@endsection
