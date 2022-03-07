<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'id'=>'1',
        'name'=>'一般撮影'
        ]);

        DB::table('categories')->insert([
        'id'=>'2',
        'name'=>'CT'
        ]);
        
        DB::table('categories')->insert([
        'id'=>'3',
        'name'=>'MRI'
        ]);
        
        DB::table('categories')->insert([
        'id'=>'4',
        'name'=>'放射線治療'
        ]);
        
        DB::table('categories')->insert([
        'id'=>'5',
        'name'=>'核医学'
        ]);
    }
}
