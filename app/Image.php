<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    
    protected $fillable=
    [
    'title',
    'path',
    'category_id'
    //  'post_id'
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
