<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::get("/", [CategoryController::class, "index"])->name("home");

Route::get("generators/", [GeneratorController::class, "index"])->name("generators");

Route::get("/{slug}", [CategoryController::class, "show"])->name("category");

Route::get("{category_slug}/generator/{generator_slug}", [GeneratorController::class, "show"])->name("generator");

Route::get("name/{name}", [NameController::class, "show"])->name("name");
