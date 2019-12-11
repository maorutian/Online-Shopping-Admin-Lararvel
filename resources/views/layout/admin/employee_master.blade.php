@extends('layout.admin.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('employees')}}" class="list-group-item">All Employees</a>
                <a href="{{route('employee_new')}}" class="list-group-item">Add Employee</a>
            </div>
        </div>
        <section>
            @yield('employee_content')
        </section>
    </div>
</div>
@endsection



