<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Post::factory(5)->create();
//        Post::create([
//            'title'=>"second post",
//            'slug'=>"second slug",
//            'excerpt'=>"second excerpt",
//            'description'=>"second desc",
//            'is_published'=>true,
//            'min_to_read'=>93
//        ]);

//             $posts = collect([[
//                'title'=>"second post",
//                'slug'=>"second slug",
//                'excerpt'=>"second excerpt",
//                'description'=>"second desc",
//                'is_published'=>true,
//                'min_to_read'=>93
//                ],[
//                 'title'=>"third post",
//                 'slug'=>"third slug",
//                 'excerpt'=>"third excerpt",
//                 'description'=>"third desc",
//                 'is_published'=>false,
//                 'min_to_read'=>77
//             ]]);

            // to create posts without created_at and updated_at
//             $posts->each(function ($post){
//                 Post::insert($post);
//             });


        // to create posts with created_at and updated_at
//            $posts->each(function ($post){
//                Post::create([
//                    'title'=>$post['title'],
//                    'slug'=>$post['slug'],
//                    'excerpt'=>$post['excerpt'],
//                    'description'=>$post['description'],
//                    'is_published'=>$post['is_published'],
//                    'min_to_read'=>$post['min_to_read']
//                ]);
//
//            });

            $json = File::get('database/json/posts.json');
            $posts = collect(json_decode($json));

        // to create posts using json file
            $posts->each(function ($post){
                Post::create([
                    'title'=>$post->title,
                    'slug'=>$post->slug,
                    'excerpt'=>$post->excerpt,
                    'description'=>$post->description,
                    'is_published'=>$post->is_published,
                    'min_to_read'=>$post->min_to_read
                ]);

            });
    }
}
