<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);;
        $type_menu = 'employee';
        return view('pages.admin.employees.index', compact('employees', 'type_menu'));
    }

    public function create()
    {
        $groups = Employee::distinct()->pluck('group')->unique();
        $units = Employee::distinct()->pluck('unit')->unique();
        $positions = Employee::distinct()->pluck('position')->unique();
        $type_menu = 'employee';
        return view('pages.admin.employees.create', compact('type_menu', 'groups', 'units', 'positions'));
    }

    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        // if ($request->hasFile('photo')) {
        //     $photoPath = $request->file('photo')->store('public/photos');
        //     $data['photo'] = Storage::url($photoPath);
        // }

        Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    public function edit(Employee $employee)
    {
        $groups = Employee::distinct()->pluck('group')->unique();
        $units = Employee::distinct()->pluck('unit')->unique();
        $positions = Employee::distinct()->pluck('position')->unique();
        $type_menu = 'employee';
        return view('pages.admin.employees.edit', compact('employee', 'type_menu', 'groups', 'units', 'positions'));
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        // return $request;
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            Storage::delete($employee->photo); // Hapus foto lama
            $photoPath = $request->file('photo')->store('public/photos');
            $data['photo'] = Storage::url($photoPath);
        }

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    public function show(Employee $employee)
    {
        $type_menu = 'employee';
        return view('pages.admin.employees.show', compact('employee', 'type_menu'));
    }
    public function destroy(Employee $employee)
    {
        Storage::delete($employee->photo); // Hapus foto sebelum menghapus record
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}
