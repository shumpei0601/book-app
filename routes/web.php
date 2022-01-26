<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
Route::get('/todo/find', [Todocontroller::class, 'search'])->name('todo.find');
Route::post('/todo/find', [TodoController::class, 'search']);
