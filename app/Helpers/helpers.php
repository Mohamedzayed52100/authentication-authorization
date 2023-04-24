<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PermissionGroup;
use App\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

function permission($permission)
{
    return Auth::guard('admin')->user()->hasAnyPermission($permission) ? true : false;
}
