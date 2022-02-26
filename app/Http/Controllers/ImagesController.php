<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use App\Image;
use Storage;

class ImagesController extends Controller
{
    public function show()
    {
     return view('image');
    }
    
    public function create(Request $request)
    {
        $image = new Image;
        $form = $request->all();
        
        //s3へアップロードする
        $picture = $request->file('image');
        
        //バケット"rad-hub-bucket"にアップロード
        $path = Storage::disk('s3')->putFile('rad-hub-bucket',$picture,'public');
        
        //アップロードした写真のフルパスを取得する
        $image->path = Storage::disk('s3')->url($path);
        $image->save();
        
        return redirect('/');
    }
}