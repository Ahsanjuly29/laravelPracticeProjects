<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todolist() {
        return view('Todolist.index');
    }
}
