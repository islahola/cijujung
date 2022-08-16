<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            agendaDesa::class,
            beritaDesa::class,
            dataPendidikanDesa::class,
            profilDesa::class,
            strukturPemerintahanDesa::class,
            destinasi::class,
            users::class
        ]);
    }
}
