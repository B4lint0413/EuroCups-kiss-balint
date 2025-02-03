<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eurocup extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function teams(){
        return $this->belongsToMany(Team::class)->withPivot('rank');
    }
}
