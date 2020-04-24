<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriler_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('TRUNCATE TABLE kategoriler');
        //DB::table('kategoriler')->truncate();

        for ($i=0 ; $i<15 ; $i++)
        {
            $kategori_adi = rtrim($faker->sentence(1), '.');

            DB::table('kategoriler')->insert([
                'ad' => $kategori_adi
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
