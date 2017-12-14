<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        
    } // end of public function create()

    public function destroy() {
        auth()->logout();
        return redirect('/');
    } // end of public function destroy()
} // end of class SessionsController extends Controller
