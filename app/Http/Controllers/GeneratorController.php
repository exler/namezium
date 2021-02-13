<?php

namespace App\Http\Controllers;

use App\Models\Generator;

class GeneratorController extends Controller
{
    public function show(string $category_slug, string $generator_slug)
    {
        $generator = Generator::whereSlug($generator_slug)->firstOrFail();
        return view("generator", ["generator" => $generator]);
    }
}
