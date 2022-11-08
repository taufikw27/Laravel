<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_baru')->insert([
            'nama'=> 'Taufik',
            'jk' => 'Laki-laki',
            'no_hp'=>'085399987580',
            'umur'=>'20',
        ]);
    }
}
