<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
