<?php

namespace App;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){ // $post->user om data over de gebruiker te pakken
        return $this->belongsTo(User::class);
    }

    public function addComment($body){

        $this->comments()->create(compact('body'));
        return ;
    }


}
