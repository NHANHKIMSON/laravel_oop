<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Show form to create a category
    public function create()
    {
        return view('categories.create');
    }

    // Store new category in DB
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        Category::create([
            'category' => $request->category,
            'note' => $request->note,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    // Show a single category
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // Show form to edit category
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Update the category
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category' => $request->category,
            'note' => $request->note,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete the category
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
