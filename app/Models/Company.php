<?php

namespace App\Models;

use App\Models\User;
use App\Models\Job_vacancy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    protected $fillable = [
        'banner',
        'company_logo',
        'company_name',
        'company_field',
        'company_location',
        'company_size',
        'company_gallery',
        'company_address',
        'company_website',
        'short_description',
        'company_description',
        'company_industry',
    ];
    public function job_vacancy(): HasMany
    {
        return $this->hasMany(Job_vacancy::class, 'company_id');
    }
    public function profileCompleted(): bool
    {
        $userAttributes = collect($this->attributesToArray())->except(['company_id', 'created_at', 'updated_at']);

        if ($userAttributes->contains(null)) {
            return false; 
        }

        return true; 
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'company_id');
    }
    public function job_application(): HasMany
    {
        return $this->hasMany(Job_application::class, 'company_id');
    }
    public function consultation(): HasMany
    {
        return $this->hasMany(Consultation::class, 'company_id');
    }
}