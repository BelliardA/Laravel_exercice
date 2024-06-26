<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'year', 'country_id', 'director_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function director(){
        return $this->belongsTo(Artist::class);
    }

    public function actors(){
        return $this->belongsToMany(Artist::class);
    }
}