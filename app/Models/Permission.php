<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

     protected $fillable = ['role_id', 'module_id', 'read', 'write', 'create', 'delete', 'import', 'export'];

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

}
