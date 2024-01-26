<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\AdditionalUserDetails;
use App\Models\AdoptionRequest;
use Illuminate\Validation\Rule;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'birthday',
        'gender',
        'email',
        'phone_number',
        'password',
        'isAdmin',
        'isSuperAdmin',
    ];

    public function isAdmin()
    {
    return $this->role === 'isAdmin'; // Assuming 'admin' is the role name for administrators
    }
    
    public function additionalDetails()
    {
        return $this->hasOne(AdditionalUserDetails::class);
    }

    public function getAdditionalDetailsFilledAttribute()
    {
        return $this->additionalDetails()->exists();
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }
    
    public function missingPets()
    {
        return $this->hasMany(MissingPet::class);
    }

    public function isSuperAdmin()
    {
        return $this->isSuperAdmin; // Assuming 'isSuperAdmin' is a boolean field in your users table
    }

    public function demotions()
    {
        return $this->hasMany(Demotion::class);
    }

    public function isDemoted()
    {
        return $this->demotions()->exists();
    }

    public function latestDemotion()
    {
        return $this->demotions()->latest()->first();
    }
    
    public function promotions()
    {
    return $this->hasMany(Promotion::class); // Assumes the foreign key is 'user_id' in the promotions table
    }
    
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

    public function hasPendingAdoptionRequest()
{
    return $this->adoptionRequests()->whereHas('adoptionStatus', function ($query) {
        $query->where('status', 'pending');
    })->exists();
}

public static function validationRules($userId)
{
    return [
        // Valid ID picture validation rule
        'additionalDetails.valid_id' => AdditionalUserDetails::validationRules($userId)['valid_id'],
    ];
}

public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}