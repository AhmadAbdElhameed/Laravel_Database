<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait scopeTrait
{
    // local scope

    public function scopePublished(Builder $builder){
        return $builder->where('is_published',true);
    }

    public function scopeWithUserData(Builder $builder){
        return $builder->join('users','posts.user_id','=','users.id')
            ->select('posts.title');
    }

    public function scopePublishedByUser(Builder $builder , $userId){
        return $builder->where('user_id',$userId)
            ->whereNotNull('created_at');
    }
//    public function scopeWithUserData(Builder $query)
//    {
//        return $query->leftJoin('users', 'posts.user_id', '=', 'users.id')
//            ->select('posts.title', 'users.name', 'users.email')
//            ->latest()
//            ->first();
//    }
}
