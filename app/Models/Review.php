<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //uno a muchos inversa
    public function users(){
        return $this->belongsTo(User::class);
    }

    //uno a muchos inversa
    public function courses(){
        return $this->belongsTo(Course::class);
    }
}
