<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traces_of_experience extends Model
{
    use HasFactory;

    protected $fillable = ['tittle', 'position', 'description', 'year_in', 'year_out'];

    public function candidates()
    {
        return $this->belongsToMany(candidates::class, 'pivot_candidate_experiences');
    }
}
