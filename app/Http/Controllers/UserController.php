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
    return view('user.all', ['users' => $users]);
  }

  public function create(Request $request)
  {
    if ($request->has('name')) {
      DB::table('users')->insert([
        'name' => $request->input('name'),
      ]);
    }
    return view('user.create');
  }

  public function myDelete($id)
  {
    DB::table('users')
      ->where('id', $id)
      ->delete();
  }

  public function myUpdate(Request $request, $id)
  {
    if ($request->has('name')) {
      DB::table('users')->where('id', $id)->update([
        'name' => $request->input('name'),
      ]);
    }
    return view('user.update');
  }
}
