<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $guarded = ['order_id'];

    public function userdesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }
    public function expertclass(): BelongsTo
    {
        return $this->belongsTo(Expertclass::class, 'class_id');
    }
}
