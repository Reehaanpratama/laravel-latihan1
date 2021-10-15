<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Nikah', 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah menunda nikah?', 'content' => 'lorem ipsum'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'lorem ipsum'],
        ];
        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
