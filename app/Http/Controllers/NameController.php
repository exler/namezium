<?php

namespace App\Http\Controllers;

class NameController extends Controller
{
    public function show(string $name)
    {
        $name = urldecode($name);
        return view("name", ["name" => $name]);
    }
}
