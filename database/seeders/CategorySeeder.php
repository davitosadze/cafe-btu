<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'category_name' => "სენდვიჩები"
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => "ფრი და სტარტერები"
        ]);


        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => "ცივი სასმელები"
        ]);
    }
}
