<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'X線検査で気をつけること',
            'category_id' => 1,
            'user_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);
    
        $param = [
            'title' => 'CT検査で気をつけること',
            'category_id' => 2,
            'user_id' => 2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        DB::table('posts')->insert($param);
    }
}
