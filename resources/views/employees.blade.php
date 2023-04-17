<!-- resources/views/employees/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Employee No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->emp_no }}</td>
                        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->department->dept_name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('employees.edit', $employee->emp_no) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->emp_no) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        </div>
    </div>
@endsection
