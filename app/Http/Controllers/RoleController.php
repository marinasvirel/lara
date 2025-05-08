<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;

class RoleController extends Controller
{
  public function show()
  {
    $roles = Role::all();
    foreach ($roles as $role) {
      foreach ($role->users as $user) {
        dump($user);
      }
    }
  }
}
