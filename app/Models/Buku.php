<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'edisi',
        'no_rak',
        'tahun',
        'penerbit',
        'kd_penulis',
    ];
    protected $primaryKey = 'id';

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'no_rak');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'kd_penulis', 'id');
    }
};
