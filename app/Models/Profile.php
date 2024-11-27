<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    // Un profile ne peut appartenir qu'à un utilisateur à la fois
    public function user(){
        return $this->belongsTo(User::class);
    }
}
