<?php

namespace App\Models;

use App\Models\UserDesc;
use App\Models\Discount;
use App\Models\ExpertclassApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Expertclass extends Model
{
    use HasFactory;
    protected $table = 'expertclasses';
    protected $primaryKey = 'class_id';
    protected $guarded = ['class_id'];
    public function userdesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'mentor_id');
    }
    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class, 'class_id');
    }
    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'class_id');
    }



}