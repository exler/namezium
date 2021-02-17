<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Generator;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generators = Generator::paginate(15);
        return view("admin.admin-generators", ["generators" => $generators]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.admin-generators-create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:generators', 'max:100'],
            'description' => ['required', 'max:200'],
            'category_id' => ['required']
        ]);

        Generator::create($validatedData);
        return redirect(route("admin-generators"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function edit(Generator $generator)
    {
        $categories = Category::all();
        return view("admin.admin-generators-create", ["categories" => $categories, "generator" => $generator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generator $generator)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:generators', 'max:100'],
            'description' => ['required', 'max:200'],
            'category_id' => ['required']
        ]);

        $generator->fill($validatedData)->save();
        return redirect(route("admin-generators"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generator  $generator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generator $generator)
    {
        $generator->delete();
        return back();
    }
}
