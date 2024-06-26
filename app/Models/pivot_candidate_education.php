<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pivot_candidate_education extends Model
{
    use HasFactory;

    protected $fillable = ['candidate_id', 'education_id'];

    public function candidate()
    {
        return $this->belongsTo(candidates::class);
    }

    public function education()
    {
        return $this->belongsTo(educational_history::class);
    }
}
