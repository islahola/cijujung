<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class strukturPemerintahanDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => 'foto1.png',
            'nama' => 'nama kepala desa',
            'jabatan'=> 'kepala desa',
            'tempat_lahir' => 'bogor',
            'tanggal_lahir' => '20-11-2000',
            'pendidikan' => 'SMA',
            'nip' => '123456',
            'user_id' => 1
        ]);
    }
}
