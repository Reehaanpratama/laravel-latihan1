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
        // $this->call(biodatastableseeder::class);
        $this->call(PostsSeeder::class);
        $this->call(DosensSeeder::class);
        $this->call(MahasiswasSeeder::class);
        $this->command->info("Sample Data Sudah Terisi");
    }
}
