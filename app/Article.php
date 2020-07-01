<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['user_id','cat_id','title','body'];
    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
