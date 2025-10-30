<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','slug'];

    //method replace id to slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //relacion de uno a muchos
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
