<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class City extends Model
{
    public function country()
    {
        return $this->BelongsTo(Country::class);
    }
}
