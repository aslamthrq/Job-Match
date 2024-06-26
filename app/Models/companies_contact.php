<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies_contact extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'email', 'telephone', 'fax', 'instagram', 'facebook', 'whatsapp'];

    public function company()
    {
        return $this->belongsTo(companies::class);
    }
}
