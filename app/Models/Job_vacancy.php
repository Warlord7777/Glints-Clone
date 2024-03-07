<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Job_vacancy extends Model
{
    use HasFactory;
    protected $primaryKey = 'job_vacancy_id';
    protected $table = 'job_vacancies';
    protected $fillable = [
        'job_name',
        'job_position',
        'estimated salary',
        'job_category',
        'job_experience',
        'job_description',
        'job_type',
        'job_system',
        'job_skills',
        'company_id',
    ];

    

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function bookmark(): hasMany
    {
        return $this->hasMany(Bookmark::class, 'job_vacancy_id');
    }
    public function job_application(): hasMany
    {
        return $this->hasMany(Bookmark::class, 'job_vacancy_id');
    }
}

