<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{	
	public function index() {
		$tasks = Task::all();
		return view('tasks.index', compact('tasks'));
	} // end of public function index()
	
	public function show($id) {
		$task = Task::find($id);
		return view('tasks.show', compact('task'));
	} // end of public function show()
} // end of class TasksController extends Controller
