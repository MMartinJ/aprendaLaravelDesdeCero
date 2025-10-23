<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //relacion de muchos a muchos
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
