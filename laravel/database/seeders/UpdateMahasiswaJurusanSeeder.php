<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Jurusan;

class UpdateMahasiswaJurusanSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Mahasiswa::all() as $mhs) {
            $jurusan = Jurusan::where('nama', $mhs->jurusan)->first();
            if ($jurusan) {
                $mhs->jurusan_id = $jurusan->id;
                $mhs->save();
            }
        }
    }
}
