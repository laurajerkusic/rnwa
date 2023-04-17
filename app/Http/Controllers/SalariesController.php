<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $salaries = Salary::all();
        return view('salaries.index', compact('salaries'));
    }

    public function create()
    {
        return view('salaries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'emp_no' => 'required|exists:employees,emp_no',
            'salary' => 'required|numeric',
            'from_date' => 'required|date|unique:salaries',
            'to_date' => 'required|date|after:from_date'
        ]);

        Salary::create($validated);

        return redirect()->route('salaries.index')->with('success', 'Salary added successfully.');
    }

    public function show(Salary $salary)
    {
        return view('salaries.show', compact('salary'));
    }

    public function edit(Salary $salary)
    {
        return view('salaries.edit', compact('salary'));
    }

    public function update(Request $request, Salary $salary)
    {
        $validated = $request->validate([
            'emp_no' => 'required|exists:employees,emp_no',
            'salary' => 'required|numeric',
            'from_date' => 'required|date|unique:salaries,from_date,' . $salary->id,
            'to_date' => 'required|date|after:from_date'
        ]);

        $salary->update($validated);

        return redirect()->route('salaries.index')->with('success', 'Salary updated successfully.');
    }

    public function destroy(Salary $salary)
    {
        $salary->delete();

        return redirect()->route('salaries.index')->with('success', 'Salary deleted successfully.');
    }
}
