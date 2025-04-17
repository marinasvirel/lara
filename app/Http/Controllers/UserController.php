<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    $users = DB::table('users')->select('name', 'email')->get();
    return view('user.show', ['users' => $users]);
  }
}
