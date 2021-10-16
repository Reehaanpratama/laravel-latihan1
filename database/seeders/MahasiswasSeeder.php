<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nim' => "343", 'nama' => "Yayat", 'jurusan' => "RPL", 'wali' => "Jajang"],
            ['nim' => "344", 'nama' => "Acim", 'jurusan' => "TKRO", 'wali' => "Atep"],
            ['nim' => "345", 'nama' => "Tabob", 'jurusan' => "TBSM", 'wali' => "Aep"],
            ['nim' => "346", 'nama' => "Subur", 'jurusan' => "Farmasi", 'wali' => "Cucu"],
            ['nim' => "347", 'nama' => "Eko", 'jurusan' => "OTKP", 'wali' => "Dayat"],
        ];

        DB::table('mahasiswas')->insert($post);

    }
}
