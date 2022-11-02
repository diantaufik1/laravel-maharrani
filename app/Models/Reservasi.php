<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_pemesan',
        'tamu',
        'instansi',
        'jumlah_tamu',
        'lokasi_meja',
        'tanggal_jam',
    ];
}
