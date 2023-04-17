<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', ['departments' => $departments]);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dept_no' => 'required|unique:departments,dept_no|max:4',
            'dept_name' => 'required|max:40',
        ]);

        Department::create($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'dept_no' => 'required|max:4|unique:departments,dept_no,' . $department->dept_no . ',dept_no',
            'dept_name' => 'required|max:40',
        ]);

        $department->update($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}
