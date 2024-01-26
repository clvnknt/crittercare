<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['user_id', 'promoted_at'];
    protected $table = 'promotions';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
