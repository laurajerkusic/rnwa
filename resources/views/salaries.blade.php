@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Salaries
                        <a href="{{ route('salaries.create') }}" class="btn btn-primary float-right">Add Salary</a>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Salary</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($salaries as $salary)
                                    <tr>
                                        <td>{{ $salary->employee->first_name }} {{ $salary->employee->last_name }}</td>
                                        <td>${{ number_format($salary->salary, 2) }}</td>
                                        <td>{{ $salary->from_date->format('m/d/Y') }}</td>
                                        <td>{{ $salary->to_date->format('m/d/Y') }}</td>
                                        <td>
                                            <a href="{{ route('salaries.show', $salary) }}" class="btn btn-sm btn-secondary">View</a>
                                            <a href="{{ route('salaries.edit', $salary) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('salaries.destroy', $salary) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this salary record?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
