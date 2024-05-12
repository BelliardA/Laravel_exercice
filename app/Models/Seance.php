<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'numSalle',
        'movies_id',
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
