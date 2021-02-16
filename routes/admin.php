<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminGeneratorController;
use App\Http\Controllers\Admin\AdminNameController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get("/admin", function () {
        return redirect(route("admin-categories"));
    })->name("admin");

    Route::resource("/admin/category", AdminCategoryController::class)->name("index", "admin-categories");
    Route::resource("/admin/generator", AdminGeneratorController::class)->name("index", "admin-generators");
    Route::resource("/admin/name", AdminNameController::class)->name("index", "admin-names");
    Route::resource("/admin/user", AdminUserController::class)->name("index", "admin-users");
});
