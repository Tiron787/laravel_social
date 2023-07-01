<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'posts';
    protected $guarded = []; //false;
    
    public function category(){

        return $this->belongsTo (category::class, 'category_id','id');
    }

    public function tags(){
         return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
       
    
}
