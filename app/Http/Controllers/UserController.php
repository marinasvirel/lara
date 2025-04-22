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

  public function selectUser()
  {
    // $users = User::where('age', 30);

    // $users = User::where('salary', '>=', 100)
    //   ->where('salary', '<=', 300)
    //   ->get();

    // $users = User::skip(4)->take(5)->get();

    $users = User::whereIn('id', [1, 3, 4, 5])
      ->get();


    dump($users);
  }
}
