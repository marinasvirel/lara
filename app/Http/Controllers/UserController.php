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
    $user = DB::table('users')->where('id', 3)->value('email');
    return view('user.one', ['user' => $user]);
  }
}
