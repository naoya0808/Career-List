<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_url',
        'application_status',
        'industry',
        'location',
        'rating',
        'notes',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
