<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed jurusan table
        $list_jurusan = [
            'Administrasi Perkantoran',
            'Akuntansi',
            'Pemasaran',
            'Teknik Komputer',
        ];

        // Loop through each jurusan above and create the record for them in the database
        foreach ($list_jurusan as $jurusan) {
            DB::table('jurusans')->insert([
                'nama_jurusan' => $jurusan,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
