<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
    
    protected $fillable = ['category_name', 'sort_desc','author_name','total_post'];

    public function category_blog_list()
    {
        return $this->hasMany(Blog::class,'category_id');
    }
}
