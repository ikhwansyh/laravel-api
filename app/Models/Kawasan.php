<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kawasan extends Model
{
    /** @use HasFactory<\Database\Factories\KawasanFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'pondok_id'
    ];

    public function pondok(){
        return $this->belongsTo(Pondok::class);
    }

    public function alamats()
    {
        return $this->morphToMany(Alamat::class, 'alamatable',);
    }
}
