<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
class Video extends Model
{
    use HasFactory;

    //relacion inversa uno a muchos
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos polimorfica
    public function comments(): MorphMany{
        return $this->morphMany(Comment::class, 'commentable');
    }

    //relaciono de muchos a muchos polimorfica
    public function tags(): MorphToMany{
        return $this->morphToMany(Tag::class, 'taggable');
    }

    
}
