<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
  public function user()
  {
    return $this->BelongsTo(User::class);
  }
}
