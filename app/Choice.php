<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['key','label'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
