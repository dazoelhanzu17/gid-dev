<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['pages_name', 'pages_name_eng', 'pages_desc', 'pages_desc_eng', 'create_author', 'publish', 'file_foto', 'category'];
}
