<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class urunler_kategoriler_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); // FOERİGN hatası almamak için mysql in foreignkey kontrol anahtarını kapattım
                                                         // Bunları aynı şekilde diğer ilişkili tabloların seedlerinin içine koymam gerek
        DB::statement('TRUNCATE TABLE urunler_kategoriler');
        DB::table('urunler_kategoriler')->insert(['urun_id' => 1 , 'kategori_id' => 1 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 1 , 'kategori_id' => 2 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 2 , 'kategori_id' => 1 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 2 , 'kategori_id' => 2 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 2 , 'kategori_id' => 3 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 3 , 'kategori_id' => 1 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 3 , 'kategori_id' => 2 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 3 , 'kategori_id' => 3 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 3 , 'kategori_id' => 4 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 3 , 'kategori_id' => 5 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 4 , 'kategori_id' => 1 ]);
        DB::table('urunler_kategoriler')->insert(['urun_id' => 5 , 'kategori_id' => 2 ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); // Seed işlemi bitince mysql'in foreignkey kontrol anahtarını kapattım
    }
}
