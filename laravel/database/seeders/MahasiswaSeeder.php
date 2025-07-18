<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Felicia Arcadia',
            'nim' => '225150201111000',
            'jurusan' => 'Sains Data',
        ]);

        Mahasiswa::factory()->count(5)->create();
    }
}
