<?php
/* check permission */
function canAccess(array $permissions)
{
    $permission = auth()->guard('web')->user()->hasAnyPermission($permissions);
    $superAdmin = auth()->guard('web')->user()->hasRole('Super Admin');
    if ($permission || $superAdmin) {
        return true;
    } else {
        return false;
    }
}
