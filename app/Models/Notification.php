<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $primaryKey = 'notification_id';

    protected $guarded = ['notification_id'];

    public function UserDesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }
}
