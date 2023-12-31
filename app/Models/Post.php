<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

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

    //Relacion 1:1 Polimorfica

    public function image(): MorphOne
    {
        //segundo parametro, el el nombre del metodo en el modelo Image
        return $this->morphOne(Image::class, 'imageable');
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
