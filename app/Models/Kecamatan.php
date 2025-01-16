<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    /** @use HasFactory<\Database\Factories\KecamatanFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'kota_id',
    ];


    public function kota(){
        return $this->belongsTo(Kota::class);
    }

    public function desas(){
        return $this->hasMany(Desa::class);
    }
}
