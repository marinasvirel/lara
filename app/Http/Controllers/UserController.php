<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    $users = DB::table('users')
      ->where('age', '<=', 30)
      ->where('age', '>=', 20)
      ->inRandomOrder()
      ->get();
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    $user = DB::table('users')
    ->where('age', '<=', 30)
    ->where('age', '>=', 20)
    ->inRandomOrder()
    ->first();
    return view('user.one', ['user' => $user]);
  }

  public function names()
  {
    $names = DB::table('users')->pluck('name');
    return view('user.names', ['names' => $names]);
  }
}
