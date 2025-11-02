<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','slug'];

    //method replace id to slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
    //relacion de muchos a muchos
    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class);
    }

}
