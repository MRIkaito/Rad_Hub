<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index') -> with(['posts' => $post->get()]);
        // ->get()を記述することで，DBからデータを取ってくるという役目を果たす
        // with(['posts'=>'$post'])だけだと，
        //インスタンス化しただけでデータはないもない$postを'posts'に格納しているだけ．
        //▶なので，当然何のデータも表示されない．
    }
    public function show(Post $post)
    {
        return view('show') -> with(['post'=>$post]);        
    }
    public function create(Post $post)
    {
        return view('create');
    }
    public function store(Post $post, Request $request)
    {
        // $input = $request['post'];
        $post->fill($request['post'])->save();
        return redirect('/posts/'.$post->id);
    }
    public function delete(Post $post)
    {
     $post->delete();
     return redirect('/');
    }
    public function edit(Post $post)
    {
        return view('edit');    
    }
    public function photo()
    {
        return view('image');
    }
}
?>