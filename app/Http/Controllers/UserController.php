<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    $users = DB::table('users')->get();
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    // $user = DB::table('users')
		// ->whereId(3)
		// ->get();
    // $user = DB::table('users')
		// ->whereName('john')
		// ->get();
    $user = DB::table('users')
		->whereEmail('john@mail.com')
		->get();
    return view('user.one', ['user' => $user]);
  }

  public function names()
  {
    $names = DB::table('users')->pluck('name');
    return view('user.names', ['names' => $names]);
  }
}
