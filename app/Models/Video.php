<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Video extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion 1:N polimorfica

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    //Relacion N:N poliformica

    public function posts(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
