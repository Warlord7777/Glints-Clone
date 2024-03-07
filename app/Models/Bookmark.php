<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmark extends Model
{
    use HasFactory;
    protected $guarded = 'bookmarks_id';
    protected $primaryKey = 'bookmarks_id';
    public function userdesc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }

    public function job_vacancy(): BelongsTo
    {
        return $this->belongsTo(Job_vacancy::class, 'job_vacancy_id');
    }
}
