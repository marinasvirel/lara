<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;

class UserController extends Controller
{
  public function show()
  {
    $users = User::find([3, 4, 5]);
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    $user = User::find(3);
    return view('user.one', ['user' => $user]);
  }
}
