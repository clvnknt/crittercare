<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class MissingPet extends Model
{
    protected $fillable = [
        'user_id',
        'pet_name',
        'gender',
        'species',
        'age_years',
        'age_months',
        'pictures',
        'notable_features',
        'last_seen_location',
        'description',
        'contact_social_media',
        'contact_phone',
        'contact_email',
        'status',
        'missing_since', // Add missing_since to the fillable attributes
        'date_found', // Add date_found to the fillable attributes
    ];

    protected $dates = [
        'missing_since', // Specify that missing_since should be treated as a date
        'date_found', // Specify that date_found should be treated as a date
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'missing_since' => 'date:Y-m-d',
    ];
    
}


