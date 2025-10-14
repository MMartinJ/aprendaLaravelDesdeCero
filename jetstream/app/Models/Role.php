<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
//relacion de muchos a muchos con pivote en la tabla role_user
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
//relacion de muchos a muchos con pivote en la tabla permission_role
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

}
