<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
  
  public function __construct() {
    $this->middleware('guest', ['except' => 'destroy']);    
  } // end of public function __construct()

  public function create() {
   
    return view('sessions.create');
   
  } // end of public function create()

  public function store() {

    if (!auth()->attempt(request(['email', 'password']))) {
      return back()->withErrors([
        'message' => 'Invalid credentials. Please try again.'
      ]);
    } // end of if (!auth()->attempt(request(['email', 'password'])))

    return redirect('/');

  } // end of public function store()

  public function destroy() {
    auth()->logout();
    return redirect('/');
  } // end of public function destroy()
} // end of class SessionsController extends Controller
