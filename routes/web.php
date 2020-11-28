<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

Route::get("/", [ItemsController::class, "index"]);
Route::get("/items/add", [ItemsController::class, "create"]);
Route::get("/items/show/{id}", [ItemsController::class, "show"]);
Route::get("/items/edit/{id}", [ItemsController::class, "edit"]);
Route::get("/items/delete/{id}", [ItemsController::class, "delete"]);



