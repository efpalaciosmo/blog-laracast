<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];  // This define all in [] as non fillable
//    protected $fillable = ['title', 'excerpt', 'body'];

    protected $with = ['category', 'author'];  //Esto evita el problema N+1

    public function category(){
         return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
