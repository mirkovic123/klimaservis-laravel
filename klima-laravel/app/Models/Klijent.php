<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servis;

class Klijent extends Model
{
    use HasFactory;

    public function servisi()
    {
        return $this->hasMany(Servis::class);
    }
}
