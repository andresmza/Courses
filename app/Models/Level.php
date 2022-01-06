<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //uno a muchos
    public function course(){
        return $this->hasMany(Course::class);
    }
}
