<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $table = 'rak'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'lokasi',

    ];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id');
    }
}
