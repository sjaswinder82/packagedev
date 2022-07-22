<?php

namespace Demoapp\Todoapp\Http\Controllers;

class TodosController extends Controller
{
    public function todos()
    {
        return view('todoapp::todos.index');
    }
}
