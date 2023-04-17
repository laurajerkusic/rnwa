@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Departments</h1>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('departments.create') }}" class="btn btn-primary">Add Department</a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Dept No</th>
                        <th scope="col">Dept Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{ $department->dept_no }}</td>
                            <td>{{ $department->dept_name }}</td>
                            <td>
                                <a href="{{ route('departments.edit', $department) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('departments.destroy', $department) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
