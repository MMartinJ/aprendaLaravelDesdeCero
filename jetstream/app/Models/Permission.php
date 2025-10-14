<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;

    //relacion muchos a muchos con pivote en la tabla permission_role
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
