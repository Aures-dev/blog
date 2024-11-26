<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    /** 
     * @use HasFactory<\Database\Factories\CommentFactory> 
     */
    use HasFactory;

    protected $fillable = ['comment','user_id','article_id'];
}
