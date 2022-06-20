<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class beritaDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita_desas')->insert([
            'judul' => '1 Muharam Sangat Meriah',
            'slug' => '1-muharam-sangat-meriah',
            'konten' => 'lorem ipsum dolor sit amet',
            'gambar_berita' => 'foto2.png',
            'is_active' => true,
            'views' => 12,
            'user_id' => 1
        ]);
    }
}
