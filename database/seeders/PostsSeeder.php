<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
        ['title' =>"Belajar tajwid menyenangkan", 'content'=>'lorem ipsum'],
        ['title' =>"Bacaan shalat", 'content'=>'lorem ipsum'],
        ['title' =>"Juz amma", 'content'=>'lorem ipsum'],
        ];

        //memasukan data kedalam tabel "posts"
        DB::table('posts')->insert($post);
     }
}
