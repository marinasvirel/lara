<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function roles() :BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
