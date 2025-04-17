<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    // $users = DB::table('users')
		// ->whereIn('id', [1, 2, 3, 5])
		// ->get();
    $users = DB::table('users')
		->whereNotIn('id', [1, 2, 3, 5])
		->get();
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    $user = DB::table('users')->where('id', 3)->value('email');
    return view('user.one', ['user' => $user]);
  }

  public function names()
  {
    $names = DB::table('users')->pluck('name');
    return view('user.names', ['names' => $names]);
  }
}
