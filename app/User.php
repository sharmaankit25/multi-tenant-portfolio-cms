<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use App\Traits\OrganisationTrait;

class User extends Authenticatable
{
    use Notifiable,OrganisationTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {   
        return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * Validate if a user has permission to visit a page,
     *
     * @param $routePermissions string
     * @return bool
     */
    public function hasPermission($routePermissions)
    {
        $routePermissions = explode('|', $routePermissions);
        $roles = Auth::user()->roles;
        
        foreach ($roles as $role) {
            foreach ($role->permissions as $permission) {
                foreach ($routePermissions as $routePer) {
                    if ($permission->name === $routePer) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * Determine if the user may perform the given permission.
     *
     * @param  Permission $permission
     * @return boolean
     */
    public function checkPermission(Permission $permission)
    {   
        return $this->hasAnyRole($permission->roles->pluck('name'));
    }
}
