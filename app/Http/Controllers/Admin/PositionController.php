<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDirection = Direction::all();
        $dataPosition = Position::all();
        return view('admin.positions.index',compact(['dataPosition',"dataDirection"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataDirection = Direction::all();
        return view('admin.positions.create',compact(['dataDirection']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name"=>"string|max:30|required",
            "description"=>"string|max:200|required",
            "direction_id"=>"integer|required",
            "status"=>"integer|required",
        ]);

        Position::create($validateData);

        return redirect()->route('admin.positions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        $currentPosition = Position::findOrFail($id);
        $currentPosition->delete();
        return redirect()->route('admin.positions.index');
    }
}
