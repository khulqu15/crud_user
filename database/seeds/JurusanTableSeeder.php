<?php

use App\Jurusan;
use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = "Rekayasa Perangkat Lunak";
        $jurusan->jenis_prodi = "Teknologi Informatika";
        $jurusan->save();
    }
}
