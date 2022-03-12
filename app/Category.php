<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
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
