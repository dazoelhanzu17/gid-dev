<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blog_name', 
        'blog_name_eng', 
        'blog_desc', 
        'blog_desc_eng', 
        'file_foto', 
        'create_author', 
        'publish', 
        'link', 
        'category', 
        'post_slug', 
        'sys_user_name'
    ];

    
}
