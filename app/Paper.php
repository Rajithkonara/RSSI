<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = ['title'];

    public function questions()
    {
        //One paper has many questions (one to many relationship)
        return $this->hasMany(Question::class);
    }
}
