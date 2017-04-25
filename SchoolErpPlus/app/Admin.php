<?php

namespace App;

use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Admin extends Model implements Authenticatable, CanResetPasswordContract, HasRoleAndPermissionContract
{
    use Authenticatable, CanResetPassword, HasRoleAndPermission;

    //
    /**
     * @param Request $request
     * @internal param Requests $requests
     */
    public function createRole(Request $request){
        $validator = Validator::make($request->all(), [
            'userRole' => 'required',
        ]);
        $input = $request->all();
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect('admin/createroles')->withErrors($validator);
        }
        else
        {
            $userRole = Role::create([
                'name' => $input['userRole'],
                'slug' => $input['userRole'],
                //'description' => '', // optional
                //'level' => 1, // optional, set to 1 by default
            ]);

        }
    }
    /**
     * User belongs to many roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        // TODO: Implement roles() method.
    }

    /**
     * Get all roles as collection.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    /**
     * Check if the user has a role or roles.
     *
     * @param int|string|array $role
     * @param bool $all
     * @return bool
     */
    public function is($role, $all = false)
    {
        // TODO: Implement is() method.
    }

    /**
     * Check if the user has all roles.
     *
     * @param int|string|array $role
     * @return bool
     */
    public function isAll($role)
    {
        // TODO: Implement isAll() method.
    }

    /**
     * Check if the user has at least one role.
     *
     * @param int|string|array $role
     * @return bool
     */
    public function isOne($role)
    {
        // TODO: Implement isOne() method.
    }

    /**
     * Check if the user has role.
     *
     * @param int|string $role
     * @return bool
     */
    public function hasRole($role)
    {
        // TODO: Implement hasRole() method.
    }

    /**
     * Attach role to a user.
     *
     * @param \Bican\Roles\Models\Role|int $uId
     * @return bool|null
     * @internal param \Bican\Roles\Models\Role|int $role
     */
    public function attachRole($uId)
    {
        // TODO: Implement attachRole() method.
        $user = User::find($uId);
        $adminRole = "Admin";
        $user->attachRole($adminRole); // you can pass whole object, or just an id
    }

    /**
     * Detach role from a user.
     *
     * @param int|\Bican\Roles\Models\Role $role
     * @return int
     */
    public function detachRole($role)
    {
        // TODO: Implement detachRole() method.
    }

    /**
     * Detach all roles from a user.
     *
     * @return int
     */
    public function detachAllRoles()
    {
        // TODO: Implement detachAllRoles() method.
    }

    /**
     * Get role level of a user.
     *
     * @return int
     */
    public function level()
    {
        // TODO: Implement level() method.
    }

    /**
     * Get all permissions from roles.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function rolePermissions()
    {
        // TODO: Implement rolePermissions() method.
    }

    /**
     * User belongs to many permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userPermissions()
    {
        // TODO: Implement userPermissions() method.
    }

    /**
     * Get all permissions as collection.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPermissions()
    {
        // TODO: Implement getPermissions() method.
    }

    /**
     * Check if the user has a permission or permissions.
     *
     * @param int|string|array $permission
     * @param bool $all
     * @return bool
     */
    public function can($permission, $all = false)
    {
        // TODO: Implement can() method.
    }

    /**
     * Check if the user has all permissions.
     *
     * @param int|string|array $permission
     * @return bool
     */
    public function canAll($permission)
    {
        // TODO: Implement canAll() method.
    }

    /**
     * Check if the user has at least one permission.
     *
     * @param int|string|array $permission
     * @return bool
     */
    public function canOne($permission)
    {
        // TODO: Implement canOne() method.
    }

    /**
     * Check if the user has a permission.
     *
     * @param int|string $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        // TODO: Implement hasPermission() method.
    }

    /**
     * Check if the user is allowed to manipulate with entity.
     *
     * @param string $providedPermission
     * @param \Illuminate\Database\Eloquent\Model $entity
     * @param bool $owner
     * @param string $ownerColumn
     * @return bool
     */
    public function allowed($providedPermission, Model $entity, $owner = true, $ownerColumn = 'user_id')
    {
        // TODO: Implement allowed() method.
    }

    /**
     * Attach permission to a user.
     *
     * @param int|\Bican\Roles\Models\Permission $permission
     * @return null|bool
     */
    public function attachPermission($permission)
    {
        // TODO: Implement attachPermission() method.
    }

    /**
     * Detach permission from a user.
     *
     * @param int|\Bican\Roles\Models\Permission $permission
     * @return int
     */
    public function detachPermission($permission)
    {
        // TODO: Implement detachPermission() method.
    }

    /**
     * Detach all permissions from a user.
     *
     * @return int
     */
    public function detachAllPermissions()
    {
        // TODO: Implement detachAllPermissions() method.
    }
}
