<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $fillable = ['name', 'email', 'username', 'password', 'hp', 'id_user_group'];


 	public static function menus(){
	   return $this->belongsToMany('Modules\Menu\Entities\Menu');
	}

	public function role(){
		return $this->hasOne('Modules\Role\Entities\Role');
	}

	public function group_menus(){
  	return $this->belongsToMany('Modules\GroupMenu\Entities\GroupMenu');

	}


	public static function getUsers(){
		 $users = DB::table('users')
	            ->leftJoin('roles', 'users.id_user_group', '=', 'roles.id')
	            ->select('users.*', 'roles.nama_user_group')
	            ->paginate(1);
	        
	   return $users;
	}

}