<?php

// app/Models/Report.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'user_id', 'case_type_id', 'description', 'status', 'picture', 'video'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function caseType()
    {
        return $this->belongsTo(CaseType::class);
    }
}


