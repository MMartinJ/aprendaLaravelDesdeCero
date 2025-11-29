<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function author(User $user, Post $post): Response
    {
        return $user->id === $post->user->id ? Response::allow() : Response::deny('No tienes permisos para acceder a esta publicación');
    }

    public function published(?User $user, Post $post): Response
    {
        //return Response::allow();
        return $post->status == 2 ? Response::allow() : Response::deny('Post no publicado');
    }
}
