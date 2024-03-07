<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'blog_id';
    protected $fillable = [
        'blog_title',
        'writer_id',
        'upload_date',
        'content',
        'topic',
    ];
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'writer_id');
    }
}