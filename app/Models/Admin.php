<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    protected $guarded = ['admin_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
    public function blog(): HasMany
    {
        return $this->belongsTo(Blog::class, 'admin_id');
    }

}
