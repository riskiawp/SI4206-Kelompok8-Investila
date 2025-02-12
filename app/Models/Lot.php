<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = [
        'ikan',
        'roi',
        'lokasi',
        'jumlah_lot',
        'image'
    ];
}
