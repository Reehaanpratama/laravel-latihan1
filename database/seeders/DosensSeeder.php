<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd' => "123", 'nama' => "Adjat", 'alamat' => "Cibiru"],
            ['nipd' => "124", 'nama' => "Mahmud", 'alamat' => "Cikutra"],
            ['nipd' => "125", 'nama' => "Bambang", 'alamat' => "Pajagalan"],
            ['nipd' => "126", 'nama' => "Agus", 'alamat' => "Majalaya"],
            ['nipd' => "127", 'nama' => "Dalton", 'alamat' => "Gumuruh"],
        ];

        DB::table('dosens')->insert($post);
    }
}
