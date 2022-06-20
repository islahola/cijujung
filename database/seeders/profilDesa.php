<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class profilDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil_desas')->insert([
            'foto_desa' => 'foto.png',
            'nama_desa' => 'Nama Desa',
            'sejarah' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi, dolores nulla perspiciatis iure dicta nostrum accusantium quasi 
                        facilis modi fuga ducimus blanditiis adipisci at autem sequi, quod earum aut. Vero?',
            'visi' => 'Ini visinya',
            'misi' => 'ini misinya',
            'user_id' => 1
        ]);
    }
}
