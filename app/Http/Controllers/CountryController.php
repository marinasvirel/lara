<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\DB; // подключаем фасад DB

class CountryController extends Controller
{
  public function show()
  {
    $countries = Country::with('cities')->get();
    // foreach ($countries as $country) {
    //   echo "<h2>" . $country->name . "</h2>";
    //   foreach ($country->cities as $key => $city) {
    //     echo "<p>" . $city->name . "</p>";
    //   }
    // }
    return view('country.show', ['countries' => $countries]);
  }
}
