<?php

namespace App\Models;
//use App\Models\Filterable;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'posts';
    protected $guarded = []; //false;
    
    public function category(){

        return $this->belongsTo (category::class, 'category_id','id');
    }

    public function tags(){
         return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
       
    
}
 