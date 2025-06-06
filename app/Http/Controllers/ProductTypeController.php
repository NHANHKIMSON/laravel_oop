<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = ProductType::all();
        return view('product_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        ProductType::create($request->only('type', 'note'));

        return redirect()->route('product-types.index')->with('success', 'Product type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type = ProductType::findOrFail($id);
        return view('product_types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type = ProductType::findOrFail($id);
        return view('product_types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        $type = ProductType::findOrFail($id);
        $type->update($request->only('type', 'note'));

        return redirect()->route('product-types.index')->with('success', 'Product type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = ProductType::findOrFail($id);
        $type->delete();

        return redirect()->route('product-types.index')->with('success', 'Product type deleted successfully.');
    }
}