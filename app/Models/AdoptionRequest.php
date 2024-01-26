<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pet;
use App\Models\AdoptionStatus;

class AdoptionRequest extends Model
{
    use HasFactory;

    protected $table = 'adoption_requests';

    protected $fillable = [
        'user_id',
        'pet_id',
        'reason',
        'notes', // Add 'reason' to the fillable fields
        // Add other fillable fields as needed
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function adoptionStatus()
    {
    return $this->hasOne(AdoptionStatus::class);
    }

    public function status()
{
    return $this->hasOne(AdoptionStatus::class);
}

}

