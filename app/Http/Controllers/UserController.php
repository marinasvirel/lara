<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB
use Illuminate\Http\Request; // подключим класс Request
use App\Models\User;

class UserController extends Controller
{
  public function form(Request $request)
  {
    $city = "";
    $country = "";
    
    if ($request->has('city') and $request->has('country')) {
      $city = $request->input('city');
      $country = $request->input('country');
    }
    return view('user.form', [
      'city' => $city,
      'country' => $country,
    ]);
  }
}
