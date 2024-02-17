<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|string',
            'desc' => 'string',
        ]);

        Category::create([
            'label' => $request->label,
            'description' => $request->desc,
        ]);
        return redirect()->route('create.category')->with('success', 'Category created successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('create.category')->with('success', 'Category deleted successfully!');
    }
}
