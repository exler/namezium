<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminGeneratorController;
use App\Http\Controllers\Admin\AdminNameController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], "prefix" => "admin"], function () {
    Route::get("/", function () {
        return redirect(route("admin-categories"));
    })->name("admin");

    Route::resource("category", AdminCategoryController::class)->name("index", "admin-categories")->except(["show"]);
    Route::resource("generator", AdminGeneratorController::class)->name("index", "admin-generators")->except(["show"]);
    Route::resource("name", AdminNameController::class)->name("index", "admin-names")->except(["show"]);
    Route::resource("user", AdminUserController::class)->name("index", "admin-users")->except(["show"]);
});
