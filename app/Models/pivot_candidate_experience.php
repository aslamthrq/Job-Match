<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pivot_candidate_experience extends Model
{
    use HasFactory;

    protected $fillable = ['candidate_id', 'experience_id'];

    public function candidate()
    {
        return $this->belongsTo(candidates::class);
    }

    public function experience()
    {
        return $this->belongsTo(traces_of_experience::class);
    }
}
