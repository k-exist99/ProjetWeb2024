<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    public function competition(){
    return $this->belongsTo(Competition::class);
    }
}
