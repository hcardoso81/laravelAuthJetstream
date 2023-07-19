<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    //assignacion masiva https://www.youtube.com/watch?v=DgDxAzbkOSs&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=44
    protected $guarded = [];

    public function imageable(): MorphTo
    {
       return $this->morphTo();
    }
}
