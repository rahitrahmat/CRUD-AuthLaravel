<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('makul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        Makul::create($request->all());

        return redirect()->route('makul.index')->with('success', 'Makul created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Makul $makul)
    {
        //
        return view('makul.show', compact('makul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makul $makul)
    {
        //
        return view('makul.edit', compact('makul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makul $makul)
    {
        //
        $request->validate([
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        $makul->update($request->all());

        return redirect()->route('makul.index')->with('success', 'Makul updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makul $makul)
    {
        //
        $makul->delete();

        return redirect()->route('makul.index')->with('success', 'Makul deleted successfully.');
    }
}
