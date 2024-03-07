<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory; 
    public function job_application():BelongsTo
    {
        return $this->belongsTo(Job_application::class, 'id');
    }
}