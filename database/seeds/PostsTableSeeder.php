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
        //記事のシーディングはなし．
        // $param = [
        //     'title' => 'X線検査',
        //     'contents' => '妊婦は気をつけよう',
        //     'category_id' => 1,
        //     // 'user_id' => 1,
        //     'created_at'=>now(),
        //     'updated_at'=>now(),
        // ];
        // DB::table('posts')->insert($param);
    
        // $param = [
        //     'title' => 'CT検査',
        //     'contents' => '被ばくは多い',
        //     'category_id' => 2,
        //     // 'user_id' => 2,
        //     'created_at'=>now(),
        //     'updated_at'=>now(),
        // ];
        // DB::table('posts')->insert($param);
    }
}
