<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Validation\Rule;

class AdditionalUserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'city',
        'postal_code',
        'street',
        'citizenship',
        'occupation',
        'spouse',
        'children_names',
        'current_household_pets',
        'visit_veterinarian',
        'user_id',
        'valid_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function validationRules($userId)
    {
    return [
        // ... (other validation rules)
        'valid_id' => [
            'required',
            Rule::unique('additional_user_details', 'valid_id')->where('user_id', $userId),
            'image', // Ensure it's an image file
            'mimes:jpeg,png,jpg,gif', // Allowed image file types
            'max:2048', // Maximum file size (in kilobytes)
        ],
    ];
}
}
