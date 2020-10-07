<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    protected $fillable = ['name_of_cat'];

    public function posts(){

    	return $this->hasMany(Post::class);
    }
}
