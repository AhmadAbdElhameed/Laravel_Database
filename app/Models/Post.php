<?php

namespace App\Models;

use App\Models\Scopes\PublishedWithinThirtyDaysScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes,scopeTrait;

    // Global Scope
//    protected static function booted()
//    {
//        static::addGlobalScope(new PublishedWithinThirtyDaysScope());
//    }


    protected $guarded = [];
}
