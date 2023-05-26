<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    //protected $table = "blog";

    //protected $primaryKey = "blog_id";

    //protected $timestamp =  false; not using created_at updated_at

    protected $fillable = [
        'title',
        'body',
        'category_id',
        'user_id'
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function blogHasCategory(){
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
