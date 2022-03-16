<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function addEmployee() {
 
        return view( "addemployee" );
    }
 
    public function storeEmployee( Request $request ) {
 
        $employees = new Employee;
 
        $employees->name = $request->name;
        $employees->city = $request->city;
        $employees->borndate = $request->borndate;
        $employees->salary = $request->salary;
     
        $employees->save();
        session()->flash( "success", "Tanuló sikeresen mentve" );
        return redirect( "/list-employee" );
    }
    public function listEmployee() {
 
        $employees = Employee::all();
     
        return view( "listemployee", [
            "employees" => $employees
        ] );
    }
    public function deleteEmployee( $id ) {
 
        $employees = Employee::find( $id );
        $employees->delete();
     
        session()->flash( "success", "Tanuló törölve" );
        return redirect( "/list-employee" );
    }
    public function show( $id ) {
 
        $employees = Employee::find( $id );
     
        return view( "show", [
            "employees" => $employees
        ]);
    
    }
    public function update(Request $request, Employee $employees)
    {
        $employees->update([
            'name' => request('name'),
            'city' => request('city'),
            'borndate' => request('borndate'),
            'salary' => request('salary')
        ]);
        return redirect('list-employee');
    }
    
}
