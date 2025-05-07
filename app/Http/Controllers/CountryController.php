<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\DB; // подключаем фасад DB

class CountryController extends Controller
{
  public function show()
  {
    $countries = Country::with(['cities' => function ($query) {
      $query->where('population', '>', 10000)
      ->orderBy('population', 'asc');
    }])
      ->get();
    return view('country.show', ['countries' => $countries]);
  }
}
