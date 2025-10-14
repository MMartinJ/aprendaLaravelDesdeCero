<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /**
     * funcion de relacion perfil user uno a uno
     */
    public function profile()
    {
        // $perfil = Profile::where('user_id',$this->id)->first();
        // return $perfil;
        return $this->hasOne('App\Models\Profile', 'user_id');
    }

    /**
     * Relacion de uno a muchos
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    //relacion de uno a muchos videos
    public function videos(): HasMany
    {
        return $this->hasMany((Video::class));
    }

    //relacion de muchos a muchos con pivote en la tabla role_user
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
