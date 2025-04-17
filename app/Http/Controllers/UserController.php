<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    $users = DB::table('users')
    ->where('age', 30)
    ->orWhere('id', '>', 4)
    ->orWhere('salary', 500)
    ->get();
    return view('user.show', ['users' => $users]);
  }
}
