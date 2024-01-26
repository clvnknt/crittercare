<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demotion extends Model
{
    protected $fillable = ['user_id', 'demoted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

