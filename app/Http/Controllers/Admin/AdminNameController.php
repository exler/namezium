<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Name;
use App\Models\Generator;
use Illuminate\Http\Request;

class AdminNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $names = Name::paginate(15);
        return view("admin.admin-names", ["names" => $names]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generators = Generator::all();
        return view("admin.admin-names-create", ["generators" => $generators]);
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
            'value' => ['required', 'unique:names'],
            'generator_id' => ['required']
        ]);
        Name::create($validatedData);
        return redirect(route("admin-names"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit(Name $name)
    {
        $generators = Generator::all();
        return view("admin.admin-names-create", ["generators" => $generators, "name" => $name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Name $name)
    {
        $validatedData = $request->validate([
            'value' => ['required', 'unique:names'],
            'generator_id' => ['required']
        ]);
        $name->fill($validatedData)->save();
        return redirect(route("admin-names"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Name $name)
    {
        $name->delete();
        return back();
    }
}
