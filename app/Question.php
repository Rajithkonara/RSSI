<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['correct_answer'];

    public function choices()
    {
        //one questions maybe hasMany choices      //one - many
        return $this->hasMany(Choice::class);
    }

    public function paper()
    {
        //One Question belong to one Paper   //one-one
        return $this->belongsTo(Paper::class);
    }
}
