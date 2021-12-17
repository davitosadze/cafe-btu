<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => "ორმაგი ბიგ მაკი",
            'category_id' => 1,
            'image_link' => "https://mcdonalds.ge/a7f24fee96fe-resized.png",
            'show_main' => 1,
            'price' => 25.20,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

        DB::table('products')->insert([
            'product_name' => "ბიგ მაკი ბეკონით",
            'category_id' => 1,
            'image_link' => "https://mcdonalds.ge/5282e37daacc-resized.png",
            'show_main' => 1,
            'price' => 15,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "მაესტრო კლასიკი",
            'category_id' => 1,
            'image_link' => "https://mcdonalds.ge/fd636844878e-resized.png",
            'show_main' => 1,
            'price' => 32,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);



        DB::table('products')->insert([
            'product_name' => "მაესტრო ჩიზი",
            'category_id' => 1,
            'image_link' => "https://mcdonalds.ge/acd474cd0c56-resized.png",
            'show_main' => 1,
            'price' => 18.6,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "სტიფსი 3ც",
            'category_id' => 2,
            'image_link' => "https://mcdonalds.ge/d6582017350b-resized.png",
            'show_main' => 1,
            'price' => 8,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

        DB::table('products')->insert([
            'product_name' => "ჩიქენ მაკნაგთსი 4 ც",
            'category_id' => 2,
            'image_link' => "https://mcdonalds.ge/6bf6826d795c-resized.png",
            'show_main' => 1,
            'price' => 8,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "სტიფსი 3ც",
            'category_id' => 2,
            'image_link' => "https://mcdonalds.ge/d6582017350b-resized.png",
            'show_main' => 1,
            'price' => 4.6,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "საშუალო ფრი",
            'category_id' => 2,
            'image_link' => "https://mcdonalds.ge/beeed646f451-resized.png",
            'show_main' => 1,
            'price' => 5,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "საბავშვო ფრი",
            'category_id' => 2,
            'image_link' => "https://mcdonalds.ge/f8fa79a0fa25-resized.png",
            'show_main' => 1,
            'price' => 3,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

        DB::table('products')->insert([
            'product_name' => "სტანდარტული ფორთოხლის წვენი",
            'category_id' => 3,
            'image_link' => "https://mcdonalds.ge/f3f8dcc41c04-resized.png",
            'show_main' => 1,
            'price' => 4.5,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

        DB::table('products')->insert([
            'product_name' => "ცივი ყავა",
            'category_id' => 3,
            'image_link' => "https://mcdonalds.ge/ee3019c51665-resized.png",
            'show_main' => 1,
            'price' => 4,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "სტანდარტული სპრაიტი",
            'category_id' => 3,
            'image_link' => "https://mcdonalds.ge/9501e92d417d-resized.png",
            'show_main' => 1,
            'price' => 5,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "სტანდარტული ფანტა",
            'category_id' => 3,
            'image_link' => "https://mcdonalds.ge/7f1fa7e99458-resized.png",
            'show_main' => 1,
            'price' => 3.2,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);


        DB::table('products')->insert([
            'product_name' => "სტანდარტული კოკა-კოლა",
            'category_id' => 3,
            'image_link' => "https://mcdonalds.ge/13bf39d83aef-resized.png",
            'show_main' => 1,
            'price' => 4,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

    }
}
