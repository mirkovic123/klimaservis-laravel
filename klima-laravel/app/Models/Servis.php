<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Firma;
use App\Models\Klijent;

class Servis extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum',
        'tip',
        'cena',
        'serviser',
        'napomena',
        'klijent_id',
        'firma_id',
    ];

    public function firma()
    {
        return $this->belongsTo(Firma::class);
    }

    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }
}
