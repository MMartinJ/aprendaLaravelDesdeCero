<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa de posts de user
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    //relacion uno a uno polimorfica
    public function image(): MorphOne{
        return $this->morphOne(Image::class, 'imageable');
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
