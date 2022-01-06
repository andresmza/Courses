<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function comentable(){
        return $this->morphTo();
    }

    //uno a muchos polimórfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }

    //uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
}
