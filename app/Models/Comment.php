<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = [ 
        'comment',
        'user_id',
    ];
}

// $comment = comment::create(['comment' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'
// , 'user_id' =>'1'
// ]);
// $comment = comment::create(['user_id' =>'1']);

 // $table->id('comment_id');
    //         $table->text('comment');
    //         $table->timestamp('comment_date')->useCurrent();
    //         $table->unsignedBigInteger('user_id');
    //         $table->foreign('user_id')->references('id')->on('users');
    //         $table->timestamps();