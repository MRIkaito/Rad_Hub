<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable =
    [
        'title',
        'contents',
        'category_id',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');    
    }
    public function images(){
        return $this->hasMany('App\Image');   
    }
    public function getPaginateByLimit(int $imit_count=10){
        return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    public function getByLimit(int $limit_count = 5){
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
