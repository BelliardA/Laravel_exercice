<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['numSalle', 'capacite', 'cinema_id'];

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
