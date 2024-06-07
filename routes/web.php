<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
HTTP Method
1. Get untuk menampilkan data
2. Post untuk menambahkan data
3. Put untuk mengubah data
4. Delete untuk menghapus data
});

*/


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('categories', CategoryController::class);

Route::resource('projects', ProjectController::class);