<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
    ];

    protected $table = 'mahasiswas';

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
