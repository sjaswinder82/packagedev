<?php

use Demoapp\Todoapp\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('todos', [TodosController::class, 'todos']);