<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //protected $table = 'category'
    //protected $primaryKey = 'categoryId'

    static public function selectCategory(){
        $query = Category::Select()
                    ->OrderBy('category')
                    ->get();
        return $query;
    }

}
