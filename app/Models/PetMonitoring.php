<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetMonitoring extends Model
{
    use HasFactory;

    protected $table = 'pet_monitoring';


    protected $fillable = [
        'pet_id',
        'condition',
        'status',
        'monitoring_user_id',
        'notes',
        'note_added_at',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function monitoringUser()
    {
        return $this->belongsTo(User::class, 'monitoring_user_id');
    }
}
