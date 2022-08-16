<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class destinasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasis')->insert([
            'nama_destinasi' => 'Pertanian',
            'gambar_destinasi' => 'rqmLYTB95Ow9MjmkNXJIZAheLAe3xcXNq4cWdsgL.jpg',
            'user_id' => 1
        ]);
    }
}
