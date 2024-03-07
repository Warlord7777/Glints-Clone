<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Job_application extends Model
{
    use HasFactory;
    protected $table = 'job_applications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'resume',
        'job_vacancy_id',
        'company_id',
        'application_letter',
    ];
    public function userdesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function job_vacancy(): BelongsTo
    {
        return $this->belongsTo(Job_vacancy::class, 'job_vacancy_id');
    }
    public function interview(): HasOne
    {
        return $this->hasOne(Interview::class, 'job_application_id');
    }
}
