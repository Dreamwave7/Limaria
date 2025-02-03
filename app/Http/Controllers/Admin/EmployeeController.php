<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\Position;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Employee::paginate(10);
        return view("admin.employees.index", compact("models"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positionData = Position::all();
        return view("admin.employees.create",compact("positionData"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "first_name" => "string|required|max:15",
            "last_name" => "string|required|max:15",
            "description" => "string|required|max:300",
            "phone" => "string|required|max:13",
            "image" => "file|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "position_id" => "integer|required",
        ]);

        if ($request->hasFile('image')) {
            $avatar = $request->file('image')->store(options: 'image');
            $validateData["image"] = basename($avatar);
        }

        $newEmployee = Employee::create($validateData);

        Phone::create(["phone"=>$validateData["phone"], "employee_id"=>$newEmployee->id]);


        return redirect()->route("admin.employees.index");

    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view("admin.employees.show",compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back();
    }
}
