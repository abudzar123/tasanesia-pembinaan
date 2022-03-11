<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    public function districts()
    {
      return $this->hasMany(Districts::class);
    }

    public function provinces()
    {
      return $this->belongsTo(Provinces::class);
    }
}
