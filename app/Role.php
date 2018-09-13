<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // User's array object of the role
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    /**
     * Grant the given permission to a role.
     *
     * @param  Permission $permission
     * @return mixed
     */
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

}
