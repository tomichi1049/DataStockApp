<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        
        DB::table('comments')->insert([
            'comment'=>'コメント1'
            ]);
        
        DB::table('comments')->insert([
            'comment'=>'コメント2'
            ]);
        
        DB::table('comments')->insert([
            'comment'=>'コメント3'
            ]);
        
    }
}
