<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Creates;

class Create extends Model
{
    use HasFactory;
     public function post(){
        return $this->hasMany(Creates::class, 'id');
    }
}