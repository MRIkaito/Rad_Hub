<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use App\Image;
use Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:10',
            'file' => 'required|image'
        ],[
            'title.required' => 'タイトルを入力してください',
            'title.max' => '10文字い以内で入力してください',
            'file.required' => '画像が選択されていません',
            'file.image' => '画像ファイルではありません',
        ]);
    
        if(request()->file)
        {
            $image = $request -> file('file');
            $path =Storage::disk('s3')->put('/',$image,'public');
            
            $image = new Image();
            $image->path = Storage::disk('s3')->url($path);
            $image->title = $request->title;
            $image->save();
            
            return ['succss' => '登録しました'];
        }
        return redirect('/');
    }
}