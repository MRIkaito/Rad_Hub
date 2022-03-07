<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
    return $this->hasMany('App\Post');
    }
    public function images()
    {
    return $this->hasMany('App\Image');   
    }
    public function getByCategory(){
        return $this->posts()->with('category')->orderBy('updated_at','DESC')->paginate();
    }
}
