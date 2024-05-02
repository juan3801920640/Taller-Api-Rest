<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputerStoreRequest;
use App\Http\Requests\ComputerUpdateRequest;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Computer::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerStoreRequest $request)
    {
        $computer = Computer::create($request->all());
        return response()->json($computer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return $computer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerUpdateRequest $request, Computer $computer)
    {
        $computer->update($request->all());
        return response()->json($computer, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json(['deleted'=>true], 202);
    }
}
