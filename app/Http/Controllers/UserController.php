<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use Illuminate\Http\Request; // подключим класс Request
use App\Models\User;

class UserController extends Controller
{
  public function form(Request $request)
  {
    $data = $request->except('_token', 'password', 'email');

    return view('user.form', [
      'data' => $data,
    ]);
  }
}
