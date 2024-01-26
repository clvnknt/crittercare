<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdoptionRequest;


class AdoptionStatus extends Model
{
    use HasFactory;

    protected $table = 'adoption_status';

    protected $fillable = [
        'adoption_request_id',
        'status',
    ];
public function adoptionRequest()
{
    return $this->belongsTo(AdoptionRequest::class);
}

}
