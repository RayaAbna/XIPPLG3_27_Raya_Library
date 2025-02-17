<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User2Controller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('category', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::ApiResource('/users', [User2Controller::class]);