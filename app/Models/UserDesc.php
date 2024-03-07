<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;



class UserDesc extends Model
{
    use HasFactory;
    protected $table = 'job_seekers';
    protected $primaryKey = 'user_id';
    protected $guarded = 'id';
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function profileCompleted(): bool
    {
        $userAttributes = collect($this->attributesToArray())->except(['user_id', 'created_at', 'updated_at']);

       if ($userAttributes->contains(function ($value) {
            return $value === null || $value === '';
        })) {
            return false; 
        }
        return true; 
    }
    public function bookmark(): HasMany
    {
        return $this->hasMany(Bookmark::class, 'user_id');
    }

    public function expertclass(): HasMany
    {
        return $this->hasMany(Expertclass::class, 'mentor_id');
    }
    public function expertclassapplication(): HasOne
    {
        return $this->hasOne(ExpertclassApplication::class, 'user_id');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'user_id');
    }
    public function job_application(): HasMany
    {
        return $this->hasMany(Job_application::class, 'user_id');
    }
    public function notification(): HasMany
    {
        return $this->hasMany(Notification::class, 'user_id');
    }
    public function achievements(): HasMany
    {  
        return $this->hasMany(Achievements::class, 'user_id');
    }
    public function organization(): HasMany
    {
        return $this->hasMany(Organization::class, 'user_id');
    }
    public function education(): HasMany
    {
        return $this->hasMany(Education::class, 'user_id');
    }
    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class, 'user_id');
    }
}
