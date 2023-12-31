<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['name','description','price','image','category_id','creator_id'];

    function category(){
        return $this->belongsTo(Category::class);
    }

}
