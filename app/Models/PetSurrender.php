<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetSurrender extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_name',
        'type',
        'species',
        'age_years',
        'age_months',
        'reason',
        'status',
        'photo',
        'user_id',
    ];

    // Define any relationships here, if needed

    // Example of defining a relationship with the User model:
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

