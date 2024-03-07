<?php

namespace App\Models;

use App\Models\Expertclass;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    protected $primaryKey = 'discount_id';
    protected $fillable = [
        'class_id',
        'starting_time',
        'ending_time',
        'discount',
    ];
    public function scopeActive(Builder $query): void
    {
        $query->where('ending_time', '>', now());
    }

    public function expertclass(): BelongsTo
    {
        return $this->belongsTo(Expertclass::class, 'class_id');
    }
}
