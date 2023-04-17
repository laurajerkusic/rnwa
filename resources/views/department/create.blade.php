@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Department</h1>
                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="dept_no">Dept No</label>
                        <input type="text" class="form-control @error('dept_no') is-invalid @enderror" id="dept_no" name="dept_no" value="{{ old('dept_no') }}" required>
                        @error('dept_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dept_name">Dept Name</label>
                        <input type="text" class="form-control @error('dept_name') is-invalid @enderror" id="dept_name" name="dept_name" value="{{ old('dept_name') }}" required>
                        @error('dept_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
