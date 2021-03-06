<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use Storage;

class PostController extends Controller
{
    public function index(Post $post, User $user, Image $image){
        return view('index') -> with([
                                'images' => $image->get(),
                                'posts' => $post->getByLimit(),
                                'users' => $user->get()
                                ]);
        // ->get()を記述することで，DBからデータを取ってくるという役目を果たす
        // with(['posts'=>'$post'])だけだと，
        //インスタンス化しただけでデータはないもない$postを'posts'に格納しているだけ．
        //▶なので，当然何のデータも表示されない．
    }
    public function show(Post $post, Request $request, Image $image, Category $category, User $user){
        return view('show') -> with([
                                'post'=>$post,
                                'images'=>$image->get(),
                                'category'=>$category->get(),
                                'user'=>$user->get()
                                ]);      
    }
    public function create(Post $post, Category $category, User $user){
        return view('create')->with([
                                'categories'=>$category->get(),
                                'user'=>$user->get()
                                ]);
    }
    public function store(Post $post, Request $request, Image $image){
        //投稿記事保存の機能
        $post->fill($request['post'])->save();
        
        // $sure = $request->file('image');//このままだと配列
        // dd($sure);
        // $gazo=array_shift($sure);//配列の一番最初を$gazoに格納した
        
        //画像があれば，保存する🔽
        if ($request->file('image')){
            
            $pictures = $request->file('image');
            
            foreach($pictures as $picture){
                
                //バケット"rad-hub-bucket"にアップロード
                $path = Storage::disk('s3')->putFile('rad-hub-bucket',$picture,'public');
               
                //アップロードした写真のフルパスを取得する
                $image->path = Storage::disk('s3')->url($path);
                $image->post_id=$post->id;
                
                //画像のカテゴリ保存の機能
                $image->category_id = $request['post']['category_id'];
                
                //最後に保存する
                $image->save();
            }
        };
        return redirect('/posts/'.$post->id);
    }
    public function delete(Post $post, Image $image){
        $post->delete();
        $image->delete();
        return redirect('/');
    }
    public function edit(Post $post, Image $image, Category $category){
        return view('edit') -> with([
                                'post'=>$post,
                                'images'=>$image->get(),
                                'categories'=>$category->get()
                                ]);      
    }
    public function update(Request $request, Post $post, Image $image){
        //投稿記事保存の機能
        $post->fill($request['post'])->save();
        
        //画像の追加があれば保存🔽
        if($request->file('image')){
            //s3へアップロードする
            $picture = $request -> file('image');
            
            //バケット"rad-hub-bucket"にアップロード
            $path = Storage::disk('s3')->putFile('rad-hub-bucket',$picture,'public');
            
            //アップロードした写真のフルパスを取得する
            $image->path = Storage::disk('s3')->url($path);
            $image->post_id=$post->id;
            
            //画像のカテゴリ保存の機能
            $image->category_id =  $post->category->id;
            // $image->category_id = $request['post']['category_id'];
            
             //最後に保存する
            $image->save();
        };
        
        return redirect('/posts/'.$post->id);
    }
}
?>