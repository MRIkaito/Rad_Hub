<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=
    [
    'title',
     'path'
    //  'category_id',
    //  'post_id'
    ];
}
