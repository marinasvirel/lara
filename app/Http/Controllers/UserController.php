<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use Illuminate\Http\Request; // подключим класс Request
use App\Models\User;

class UserController extends Controller
{
  public function form()
  {

    return view('user.form');
  }

  public function test(Request $request, $id, $login)
  {
    echo "id = $id, login = $login";
  }
}
