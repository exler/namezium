<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show(string $name)
    {
        return view("name");
    }
}
