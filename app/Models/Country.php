<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name','code'];

    public function posts(): \Illuminate\Database\Eloquent\Relations\HasOneThrough
    {
        return $this->hasOneThrough(Post::class,User::class);
    }
}
