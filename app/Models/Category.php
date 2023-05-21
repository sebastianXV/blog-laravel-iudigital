<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /* 1 categoria tiene muchas publicaciones ->hasMany */
    protected $fillable = ['categories', 'slug'];
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
