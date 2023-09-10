<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // seed siswa table with dummy fake data
        $data = [
            'name' => 'Admin',
            'email' => 'admin@app.test',
            'nisn' => '1234567890',
            'tgl_lahir' => '1990-01-01',
            'jenis_kelamin' => 'laki-laki',
            'agama' => 'Islam',
            'sekolah_asal' => 'Sekolah Admin',
            'nama_wali' => 'Wali Admin',
            // 'alamat' => 'Alamat Admin',
            'no_hp' => '08123456789',
            'jurusan' => 'Administrasi Perkantoran',
            'role' => 'admin',
            'foto' => null,
            'status' => 'diterima',
            'password' => bcrypt('password'),
        ];

        DB::table('users')->insert($data);
        // loop 10 times
        for ($i = 0; $i < 10; $i++) {
            // insert
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'nisn' => $faker->randomNumber(9),
                'tgl_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['laki-laki', 'Perempuan']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
                'sekolah_asal' => $faker->company,
                'nama_wali' => $faker->name,
                // 'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'jurusan' => $faker->randomElement(['Administrasi Perkantoran', 'Akuntansi', 'Pemasaran', 'Teknik Komputer']),
                'role' => 'siswa',
                'foto' =>  null,
                'status' => $faker->randomElement(['pending', 'diterima', 'ditolak']),
            ]);
        }
    }
}
