<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataPendidikanDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_pendidikan_desas')->insert([
            'nama_sekolah' => 'SDN Desa 1',
            'jumlah_guru' => 30,
            'jumlah_murid' => 100,
            'lokasi' => 'bogor',
            'user_id' => 1
        ]);
    }
}
