<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'course_id'];

    //uno a uno inversa
    public function course(){
        return $this->belongsTo(Course::class);
    }

}
