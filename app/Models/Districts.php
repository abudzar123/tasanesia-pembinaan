<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;

    public function cities()
    {
      return $this->belongsTo(Cities::class);
    }

    public function provinces()
    {
      return $this->belongsTo(Provinces::class);
    }
}
