<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    public function sport(){
        return $this->hasOne(Sport::class);
    }

    public function lieu(){
        return $this->hasOne(Lieu::class);
    }
}
