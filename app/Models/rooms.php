<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'banner', 'position_name', 'departement', 'description', 'requirements',
        'years_of_experience_criteria', 'total_open_position', 'salary', 'dateline', 'access_rights',
        'work_system', 'working_hours'
    ];

    public function company()
    {
        return $this->belongsTo(companies::class);
    }

    public function paths()
    {
        return $this->hasMany(paths::class);
    }
}
