<?php

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
        factory(\App\Models\urunler::class , 25)->create();
        $this->call(kategoriler_seeder::class);
        factory(\App\User::class , 13)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
