@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Department</h1>
                <form action="{{ route('departments.update', $department) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="dept_no">Dept No</label>
                        <
