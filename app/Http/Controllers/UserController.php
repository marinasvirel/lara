<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    $users = DB::table('users')
      ->where('age', 30)
      ->skip(3)
      ->take(10)
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

  public function createOne()
  {
    DB::table('users')->insert([
      'name' => 'name',
      'email'  => 'email.com',
      'age' => 40,
      'salary' => 40000,
      'created_at' => date('Y.m.d h:i:s'),
      'update_at' => date('Y.m.d h:i:s'),
    ]);
  }

  public function createOneId()
  {
    $id = DB::table('users')->insertGetId([
      'name' => 'idname',
      'email'  => 'idemail.com',
      'age' => 40,
      'salary' => 40000,
      'created_at' => date('Y.m.d h:i:s'),
      'update_at' => date('Y.m.d h:i:s'),
    ]);
    echo $id;
  }

  public function createSome()
  {
    DB::table('users')->insert([
      [
        'name' => '1name',
        'email'  => '1email.com',
        'age' => 40,
        'salary' => 40000,
        'created_at' => date('Y.m.d h:i:s'),
        'update_at' => date('Y.m.d h:i:s'),
      ],
      [
        'name' => '2name',
        'email'  => '2email.com',
        'age' => 40,
        'salary' => 40000,
        'created_at' => date('Y.m.d h:i:s'),
        'update_at' => date('Y.m.d h:i:s'),
      ],
      [
        'name' => '3name',
        'email'  => '3email.com',
        'age' => 40,
        'salary' => 40000,
        'created_at' => date('Y.m.d h:i:s'),
        'update_at' => date('Y.m.d h:i:s'),
      ],
    ]);
  }
}
