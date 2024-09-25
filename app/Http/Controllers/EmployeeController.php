<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee()
    {
        $employees = Employee::all();
        return view('admin.employee', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function employees_store(Request $request)
    {
         $validatedData = $request->validate([
            'employee_name' => 'required',
            'employee_email' => 'required|email|unique:employees',
            'employee_position' => 'required',
        ]);

         Employee::create([
        'employee_name' => $request->employee_name,
        'employee_email' => $request->employee_email,
        'employee_position' => $request->employee_position,

    ]);

    // Redirect with success message
        return redirect()->back()->with('success', 'Inventory saved successfully!');
       
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function employees_destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employee')->with('success', 'Employee deleted successfully.');
    }
}
