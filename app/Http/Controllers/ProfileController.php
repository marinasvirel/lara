<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
  public function show()
  {
    $profiles = Profile::all();
    $users = [];
    foreach ($profiles as $key => $value) {
      $user = $value->user;
      $users[] = [
        'id' => $user->id,
        'login' => $user->login,
        'password' => $user->password,
        'name' => $value->name,
        'surname' => $value->surname,
        'email' => $value->email,
        'user_id' => $value->user_id,
      ];
    }
    dump($users);
    return view('user.show', ['users' => $users]);
  }

  public function one()
  {
    $profile = Profile::find(1);
    $user = $profile->user;
    return view('user.one', ['user' => $user, 'profile' => $profile]);
  }
}
