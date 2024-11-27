<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    /** 
    * @use HasFactory<\Database\Factories\ArticleFactory>
    */
    use HasFactory;
    protected $fillable = ['title','body','user_id','image'];

    //Un article n'a qu'un seul auteur
    public function user (){
        return $this->belongsTo(User::class);
    }

    //Un article peut avoir plusieurs commentaires
    public function comments (){
        return $this->hasMany(Comment::class);
    }
}
