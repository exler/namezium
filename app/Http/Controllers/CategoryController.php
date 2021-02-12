<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function show()
    {
        return view("category");
    }
}
