<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    //Relacion 1:N (inversa)

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion 1:N (inversa)

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
