<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'company_address', 'company_website'];

    public function contacts()
    {
        return $this->hasMany(companies_contact::class);
    }

    public function cultures()
    {
        return $this->belongsToMany(companies_culture::class, 'pivot_companies_cultures');
    }

    public function types()
    {
        return $this->belongsToMany(companies_type::class, 'pivot_companies_types');
    }

    public function benefits()
    {
        return $this->belongsToMany(companies_benefit::class, 'pivot_companies_benefits');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'company_users');
    }

    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }
}
