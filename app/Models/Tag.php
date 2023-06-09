<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

//    public function posts(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        return $this->belongsToMany(Post::class);
//    }

    public function taggables(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Taggable::class,'taggable');
    }
}
