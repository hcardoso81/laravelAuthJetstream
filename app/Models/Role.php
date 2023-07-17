<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use APP\Models\User;
use App\Models\Permission;

class Role extends Model
{
    use HasFactory;

    //Relacion N:N

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    //Relacion N:N

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
}
