<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concession;

class Concession extends Model
{
    use HasFactory;
    public function concession(){
        return $this->hasMany(Concession::class);
    }
}
