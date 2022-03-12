<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'degree',
        'institution_id',
        'school',
        'faculty',
        'major',
        'organization',
        'position_in_org',
        'project_name',
        'position_in_project',
        'skill',
        'notes',
    ];

    public function nurseries()
    {
      return $this->hasMany(nurseries::class, 'coach_id');
    }
}
