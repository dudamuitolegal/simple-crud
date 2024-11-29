<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $table = 'songs';

    protected $fillable = [
        'song_name',
        'audio_path',
    ];
}
