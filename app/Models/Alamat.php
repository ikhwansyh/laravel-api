<?php

namespace App\Models;

use App\Models\Pondok;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alamat extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatFactory> */
    use HasFactory;

    protected $fillable = [
        'detail',
        'desa_id'
    ];


    public function desa() {
        return $this->belongsTo(Desa::class);
    }
    public function kawasans()
    {
        return $this->morphedByMany(Kawasan::class, 'alamatable');
    }
    public function pondoks()
    {
        return $this->morphedByMany(Pondok::class, 'alamatable');
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'alamatable');
    }

}
