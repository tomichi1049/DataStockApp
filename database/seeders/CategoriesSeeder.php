<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategoriesSeeder extends Seeder
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
            'category_name' => 'ポスター',
         ]);
         
        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => '空間デザイン',
         ]);
         
        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => '食材',
         ]);
         
        DB::table('categories')->insert([
            'id' => 4,
            'category_name' => '外部関係者',
         ]);
         
        DB::table('categories')->insert([
            'id' => 5,
            'category_name' => 'SIC',
         ]);
         
        DB::table('categories')->insert([
            'id' => 6,
            'category_name' => '領収書'
         ]);
         
        DB::table('categories')->insert([
            'id' => 7,
            'category_name' => '申請書',
         ]);
         
        DB::table('categories')->insert([
            'id' => 8,
            'category_name' => '備品',
         ]);
         
        DB::table('categories')->insert([
            'id' => 9,
            'category_name' => 'その他',
         ]);
    }
}