<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulePermission extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'module_id',
        'allow_all',
        'read',
        'write',
        'create',
        'delete',
        'import',
        'export',
    ];

    // Role.php
    public function modulePermissions()
    {
        return $this->hasMany(ModulePermission::class);
    }

    // Module.php
    public function permissions()
    {
        return $this->hasMany(ModulePermission::class);
    }

    // ModulePermission.php
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
