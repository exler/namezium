<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("index", ["categories" => $categories]);
    }

    public function show(string $slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        return view("category", ["category" => $category]);
    }
}
