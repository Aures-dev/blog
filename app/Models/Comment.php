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

    // Un commentaire n'a qu'un auteur 
    public function user (){
        return $this->belongsTo(User::class);
    }
    // Un commentaire n'est lié qu'a un article
    public function article (){
        return $this->belongsTo(Article::class);
    }
}
