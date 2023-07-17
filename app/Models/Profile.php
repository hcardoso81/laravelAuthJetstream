<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    //Relacion 1:N (inversa)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
