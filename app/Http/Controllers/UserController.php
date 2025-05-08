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

  public function result(Request $request)
  {
    $arr = [
      $request->input('num1'),
      $request->input('num2'),
      $request->input('num3'),
    ];
    $sum = array_sum($arr);
    return view('user.result', ['sum' => $sum]);
  }

  public function show()
  {
    $users = User::all();
    foreach ($users as $user) {
      foreach ($user->roles as $role) {
        dump($role);
      }
    }
  }

  public function one()
  {
    $user = User::with(['city', 'position'])->first();
    dump($user);
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
