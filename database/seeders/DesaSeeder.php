<?php

namespace Database\Seeders;

use App\Models\Tb_desa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tb_desa::create([
            'kec_id' => 1,
            'kode_desa' => 'D001',
            'nama_desa' => 'Dongkala'
        ]);
        Tb_desa::create([
            'kec_id' => 1,
            'kode_desa' => 'D002',
            'nama_desa' => 'Kabawokole'
        ]);
        Tb_desa::create([
            'kec_id' => 1,
            'kode_desa' => 'D003',
            'nama_desa' => 'Kancinaa'
        ]);
    }
}
