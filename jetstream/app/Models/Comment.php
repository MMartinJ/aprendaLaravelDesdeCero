<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    //relacion de uno a muchos inversa
    public function user(){
        return $this->belongsTo('User::class');
    }

    //relacion polimorfica
    public function commentable(): MorphTo{
        return $this->morphTo();
    }


   
}
