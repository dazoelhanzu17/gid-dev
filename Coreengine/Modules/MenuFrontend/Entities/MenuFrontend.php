<?php

namespace Modules\MenuFrontend\Entities;

use Illuminate\Database\Eloquent\Model;

class MenuFrontend extends Model
{
    protected $fillable = ['nama_menu', 'nama_menu_eng', 'parrent', 'link', 'kategori', 'urutan'];
}
