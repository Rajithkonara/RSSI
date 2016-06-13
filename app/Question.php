<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['body', 'correct_answer'];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }
}
