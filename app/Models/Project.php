<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'funder_projects';
    protected $fillable = [
        'project_name',
        'pm_name',
        'pm_phone',
        'pm_email',
        'main_location',
        'start_date',
        'description',
        'total_amount',
        'amount',
        'document_1',
        'document_2',
        'notes',
    ];
    public function funderproject() {
        return $this->belongsToMany(FunderProject::class); 
    }

}
