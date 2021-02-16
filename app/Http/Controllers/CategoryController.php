<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);
        return view("index", ["categories" => $categories]);
    }

    public function show(string $category_slug)
    {
        $category = Category::whereSlug($category_slug)->firstOrFail();
        return view("category", ["category" => $category]);
    }
}
