<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'title' => 'title',
                'category'=>'category',
                'user'=>'user',
                'user_id'=>1,
                'text' => 'text',
                'image'=>'image',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}