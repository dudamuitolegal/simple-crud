<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $table = 'paths';
    protected $fillable = [
        'song_id',
        'path_image',
        'path_song'
    ];

    public function song(){
        return $this->belongsTo(Song::class);
    }
}
