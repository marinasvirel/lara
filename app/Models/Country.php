<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\City;

class Country extends Model
{
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
