<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdoptionRequest;

class Pet extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'pets';

    // The attributes that are mass assignable.
    protected $fillable = [
        'pet_name',
        'type',
        'gender',
        'species',
        'age_years',       
        'age_months',        
        'description',
        'up_for_adoption',
        'photo',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'photo', 
    ];

    protected $casts = [
        'up_for_adoption' => 'string',
    ];

    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }

    public function monitoring()
    {
    return $this->hasOne(PetMonitoring::class);
    }
}