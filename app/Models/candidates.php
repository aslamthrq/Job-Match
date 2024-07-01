<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'full_name', 'photo_path', 'bio', 'address', 'headline', 'skills', 'experience'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Candidates_skill::class, 'pivot_candidate_skills');
    }

    public function languages()
    {
        return $this->belongsToMany(Candidates_language::class, 'pivot_candidate_languages');
    }

    public function educationalHistories()
    {
        return $this->belongsToMany(educational_history::class, 'pivot_candidate_educations');
    }

    public function experiences()
    {
        return $this->belongsToMany(traces_of_experience::class, 'pivot_candidate_experiences');
    }
    // Relasi dengan model CandidateContact
    public function contact()
    {
        return $this->hasOne(candidate_contact::class, 'candidate_id');
    }
}
