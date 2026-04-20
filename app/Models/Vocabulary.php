<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $fillable = [
        'topic_id',
        'tiociu_text',
        'indonesian_text',
        'audio_path',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
