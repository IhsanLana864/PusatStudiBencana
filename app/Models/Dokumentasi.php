<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;


    protected $table = 'dokumentasis'; // Pastikan nama tabel sesuai
    protected $fillable = [
        'judul',
        'penjelasan',
        'gambar',
    ];
}
