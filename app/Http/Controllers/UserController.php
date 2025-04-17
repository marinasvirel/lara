<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class UserController extends Controller
{
  public function show()
  {
    // $users = DB::table('users')
    //   ->where('salary', 500)
    //   ->orWhere(function ($query) {
    //     $query
    //       ->where('age', '>=', 20)
    //       ->where('age', '<=', 30);
    //   })
    //   ->get();
    $users = DB::table('users')
    ->where('age', '<=', 30)
    ->where('age', '>=', 20)
    ->orWhere(function ($query) {
      $query
        ->where('salary', '>=', 800)
        ->where('salary', '<=', 400);
    })
    ->get();
    return view('user.show', ['users' => $users]);
  }
}
