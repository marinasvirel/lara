<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\DB; // подключаем фасад DB

class CityController extends Controller
{
  public function show()
  {
    $city = City::with('country')->first();
    $cities = City::with('country')->get();
    $citiesMore = City::with('country')->where('population', '>', 10000)->get();
  }
}
