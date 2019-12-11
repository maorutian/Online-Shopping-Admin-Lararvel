@extends('layout.admin.employee_master')
@section('employee_content')

    <div class="col-md-10">
        <div class="page_header"><h3>All Employees</h3></div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="{{route('employees')}}">All</a></li>
        </ul>

        <!--table-->
        <table class="table table-hover myTable">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true" aria-expanded="false">Edit <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('employee_update', ['id' => $employee->id ]) }}">Edit
                                            Information</a></li>
                                    <li>
                                        <a href="{{ route('employee_update_pwd', ['id' => $employee->id ]) }}">Reset
                                            Password</a></li>
                                </ul>
                            </li>
                            <li role="presentation"><a
                                    href="{{route('employee_delete',['id'=>$employee->id])}}">Delete</a></li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!--table-->

    </div>

@endsection
