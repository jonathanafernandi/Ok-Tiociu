<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title'];

    public function vocabularies()
    {
        return $this->hasMany(Vocabulary::class);
    }

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }
}
