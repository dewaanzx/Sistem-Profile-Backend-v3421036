<?php

namespace Database\Seeders;

use App\Models\Detail_data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail_data::factory()->create([
            'id_user'=>1,
            'alamat'=>'Bandongan',
            'tempat_lahir'=>'Magelang',
            'tanggal_lahir'=>"2003-07-01",
            'id_agama'=>1,
            'foto_ktp'=>'bgdewa.jpg',
            'umur'=>19
        ]);
    }
}
