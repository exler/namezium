<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessImport;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Imports JSON data with predefined structure.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        if ($request->hasFile("file") && $request->file("file")->isValid()) {
            $file = $request->file("file");
            $content = json_decode(file_get_contents($file->getRealPath()), true);
            ProcessImport::dispatch($content);
        }

        return back();
    }
}
