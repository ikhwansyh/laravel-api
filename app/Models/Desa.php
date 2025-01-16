<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    /** @use HasFactory<\Database\Factories\DesaFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'kecamatan_id'
    ];


    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

    public function alamats(){
        return $this->hasMany(Alamat::class);
    }
}
