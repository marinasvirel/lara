<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use Illuminate\Http\Request; // подключим класс Request
use App\Models\User;

class UserController extends Controller
{
  public function all()
  {
    $users = DB::table('users')->simplePaginate(2);
    //dump($users);
    return view('user.all', ['users' => $users]);
  }
}
