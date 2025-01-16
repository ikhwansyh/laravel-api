<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    /** @use HasFactory<\Database\Factories\KotaFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'provinsi_id',
    ];


    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kecamatans() {
        return $this->hasMany(Kecamatan::class);
    }
}
