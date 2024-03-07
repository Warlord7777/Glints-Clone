<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ExpertclassApplication extends Model
{
    use HasFactory;
    protected $table = 'expertclass_application';
    protected $primaryKey = 'application_id';
    protected $guarded = 'application_id';


    public function userdesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }
    
}
