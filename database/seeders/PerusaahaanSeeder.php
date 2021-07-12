<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusaahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan_models')->insert ([
            'nama'=> 'PT Agung Trisula Mandiri',
            'email'=> 'agumanpori00@gmail.com',
            'foto'=> 'foto1.jpg',

        ]);
    }
}
