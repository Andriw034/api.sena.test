<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $computers= Computer::included()->findOrFail(2);
        $computers = Computer::all();
        // $computers=Computer::included()->filter()->get();
        return response()->json($computers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               $request->validate([
            'name' => 'required|max:255',
        ]);



        $computer = Computer::create($request->all());
        return response()->json($computer);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        // This method is typically used for rendering a form in a web application.
        // In an API context, you might not need this method.
        return response()->json(['message' => 'Edit form not applicable in API context.']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerRequest $request, Computer $computer)
    {
        $computer->update($request->all());
        return $computer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json(['mensaje' => 'Computador eliminado.']);
    }
}

