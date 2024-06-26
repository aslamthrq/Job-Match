<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pivot_companies_type extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'type_id'];

    public function company()
    {
        return $this->belongsTo(companies::class);
    }

    public function type()
    {
        return $this->belongsTo(companies_type::class);
    }
}
