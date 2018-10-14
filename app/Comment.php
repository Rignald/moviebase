<?php

namespace App;


class Comment extends Model
{
    // het behoort tot een post
    public function post(){
        return $this->belongsTo(Post::class);
    }
    // het behoort tot een gebruiker
    public function user(){ // $comment->user->name als ik de gebruikersnaam wil ophalen
        return $this->belongsTo(User::class);
    }

}
