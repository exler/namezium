<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Generator;

class GeneratorController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input("search");
        if ($query)
            $generators = Generator::search(sprintf("'%s'", $query))->paginate(16);
        else
            $generators = Generator::paginate(16);
        return view("generators", ["generators" => $generators, "query" => $query]);
    }

    public function show(string $category_slug, string $generator_slug)
    {
        $generator = Generator::whereSlug($generator_slug)->firstOrFail();
        return view("generator", ["generator" => $generator]);
    }
}
