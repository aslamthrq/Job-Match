<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educational_history extends Model
{
    use HasFactory;

    protected $fillable = ['institution_name', 'major', 'year_in', 'year_out'];

    public function candidates()
    {
        return $this->belongsToMany(candidates::class, 'pivot_candidate_educations');
    }
}
