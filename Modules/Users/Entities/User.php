<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{	
	use Notifiable;
	protected $guard = 'admin';
	protected $fillable = ['name', 'email', 'username', 'password', 'hp', 'id_user_group'];
	protected $hidden = [
			'password', 'remember_token',
	];


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