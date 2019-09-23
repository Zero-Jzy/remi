<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title','description', 'key_movie','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
