<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genresong extends Model
{
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
