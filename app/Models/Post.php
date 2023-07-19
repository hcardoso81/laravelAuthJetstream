<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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
        //seundo parametro, el el nombre del metodo en el modelo Image
        return $this->morphOne(Image::class, 'imageable');
    }
}
