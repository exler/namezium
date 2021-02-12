<?php

namespace App\Http\Controllers;

use App\Models\Generator;

class GeneratorController extends Controller
{
    public function show(string $slug)
    {
        $generator = Generator::whereSlug($slug)->firstOrFail();
        return view("generator", ["generator" => $generator]);
    }
}
