<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paths extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'path_name', 'path_type_id'];

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }

    public function pathType()
    {
        return $this->belongsTo(path_types::class);
    }

    public function pathPemberkasan()
    {
        return $this->hasMany(path_pemberkasan::class);
    }

    public function pathMeetingInvitation()
    {
        return $this->hasMany(path_meeting_invitation::class);
    }

    public function pathChallange()
    {
        return $this->hasMany(path_challange::class);
    }

    public function pathDetails()
    {
        return $this->hasMany(path_details::class);
    }

    public function pathCandidates()
    {
        return $this->hasMany(path_candidate::class);
    }
}
