<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'consultations';
    protected $primaryKey = 'consultation_id';
    protected $guarded = ['consultation_id'];
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'client_id');
    }
}
