<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    public user(){
        //$user = User::find($this->user_id);
        //return $user;
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
