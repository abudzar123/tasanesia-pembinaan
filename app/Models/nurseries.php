<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nurseries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'head_of_company',
        'address',
        'province_id',
        'city_id',
        'district_id',
        'phone',
        'email',
        'fax',
        'web',
        'bank_accountno',
        'area',
        'monthly_omzet',
        'total_capacity',
        'permanent_emp',
        'non_permanent_emp',
        'potency',
        'is_verified',
        'existing_land',
        'developing_land',
        'notes',
    ];

    public function coach()
    {
      return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function provinces()
    {
      return $this->belongsTo(Provinces::class, 'province_id');
    }

    public function cities()
    {
      return $this->belongsTo(Cities::class, 'city_id');
    }

    public function districts()
    {
      return $this->belongsTo(Districts::class, 'district_id');
    }
}
