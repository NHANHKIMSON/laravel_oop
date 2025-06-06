<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['type', 'category', 'user'])->latest()->get();

    return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', [
            'types' => ProductType::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'p_type_id' => 'required|exists:product_types,id',
        'cate_id' => 'required|exists:categories,id',
        'p_code' => 'required|string|unique:products,p_code',
        'p_name' => 'required|string',
        'unit' => 'required|string',
        'coast' => 'required|numeric',
        'price' => 'required|numeric',
        'qty' => 'required|integer',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'note' => 'nullable|string'
    ]);

    $validated['user_id'] = auth()->id();

    if ($request->hasFile('photo')) {
        $validated['photo'] = $request->file('photo')->store('products', 'public');
    }

    Product::create($validated);

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
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
        //
    }
}
