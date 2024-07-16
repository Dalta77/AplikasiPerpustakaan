<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    // Nama tabel yang terkait dengan model
    protected $table = 'penulis';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['nama_penulis', 'tempat_lahir', 'tanggal_lahir', 'email'];

    // Relasi dengan buku
    public function buku()
    {
        // Asumsikan bahwa kd_penulis adalah kunci asing di tabel buku
        return $this->hasMany(Buku::class, 'kd_penulis', 'id');
    }
}
