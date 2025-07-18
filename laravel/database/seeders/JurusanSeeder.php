<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua nama jurusan unik dari mahasiswa
        $jurusanUnik = Mahasiswa::pluck('jurusan')->unique();

        foreach ($jurusanUnik as $namaJurusan) {
            Jurusan::create(['nama' => $namaJurusan]);
        }
    }
}
