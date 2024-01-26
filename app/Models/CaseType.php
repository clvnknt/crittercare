<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    protected $fillable = ['name', 'severity', 'type']; // Include the 'type' column in the $fillable property

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
