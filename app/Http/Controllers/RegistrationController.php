<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
  public function create() {
    return view('registration.create');
  } // end of public function create()

  public function store() {
    // validate the form
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
    ]);

    // create and save the user
    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      //'password' => bcrypt(request('password'))
      'password' => request('password')
    ]);
    
    // sign in
    auth()->login($user);

    // redirect
    return redirect('/');
  } // end of public function store()
} // end of class RegistrationController extends Controller
