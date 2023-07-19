<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    //Relacion 1:N (inversa)

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion Polimorfica

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
