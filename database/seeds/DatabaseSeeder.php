<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call(PostsTableSeeder::class);
    
        //記事のシーディング　▶　なしにする
        // $param = [
        //     'title' => 'X線検査',
        //     'contents' => '妊婦は気をつけよう',
        //     'category_id' => 1,
        //     'created_at'=>now(),
        //     'updated_at'=>now(),
        // ];
        // DB::table('posts')->insert($param);
    
        // $param = [
        //     'title' => 'CT検査',
        //     'contents' => '被ばくは多い',
        //     'category_id' => 2,
        //     'created_at'=>now(),
        //     'updated_at'=>now(),
        // ];
        // DB::table('posts')->insert($param);
        
        //カテゴリのシーディング
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
