<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Posts;

class Post extends Model
{
    use HasFactory;

     public function crate(){
         
        return $this->belongsTo(Posts::class);
    }
    
   
}