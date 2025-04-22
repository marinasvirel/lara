<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;

class UserController extends Controller
{
  public function show()
  {
    $users = User::all();
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    $user = User::find(3);
    return view('user.one', ['user' => $user]);
  }

  public function create()
  {
    $user = new User();
    $user->name = 'Createname';
    $user->email = 'email.com';
    $user->age = 20;
    $user->salary = 200;
    $user->city_id = 2;

    $user->save();
  }

  public function update()
  {
    $user = User::find(1);
    $user->name = 'Updatename';

    $user->save();
  }

  public function delOne()
  {
    User::destroy(3);
  }

  public function delSome()
  {
    $deletedRows = User::where('id', '>', 3)->delete();
  }

  public function recovery()
  {
    User::where('id', '>', 3)->restore();
  }
}
