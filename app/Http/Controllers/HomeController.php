<?php

namespace App\Http\Controllers;
use App\Models\Todo;

class HomeController extends Controller
{
 public function index() {
 $todos = Todo::orderBy('created_at', 'asc')->get();

 // Send content to welcome view.
 return view('/home/index', [
 'todos' => $todos, 'listname'=>'My Todo List'
 ]);
 }
}