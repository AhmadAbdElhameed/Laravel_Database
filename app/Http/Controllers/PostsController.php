<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $posts = DB::table('posts')
//                ->select('excerpt','description')
//                ->where('user_id',1)
//                ->value('title');
//        $added = $posts->addSelect('user_id','is_published')->get();



        // return object and can access values with arrow notation
//        $posts = DB::table('posts')
//            ->find(1001);


//        dd($posts);


//                $posts = DB::table('posts')
//                    ->select('id','title','excerpt','description','user_id')
//                    ->get();

//                $posts = DB::table('posts')
//                   ->pluck('title');

//                $posts = DB::table('posts')
//                    ->insertOrIgnore([
//                            [
//                                'user_id' =>13,
//                                'title'=>"title 45447 inserted",
//                                'slug'=>"slug 444489 inserted",
//                                'excerpt'=>"inserted 75555 slug",
//                                'description'=>"inserted 57777 description",
//                                'is_published'=>false,
//                                'min_to_read'=>3
//                            ],[
//                            'user_id' =>12,
//                            'title'=>"title 7445447 inserted",
//                            'slug'=>"slug 44447489 inserted",
//                            'excerpt'=>"inserted 7552555 slug",
//                            'description'=>"inserted 5725777 description",
//                            'is_published'=>false,
//                            'min_to_read'=>4
//                        ]
//                    ]);

        // Upsert change the unique values if inserted differently
        // from database using unique columns
//        $posts = DB::table('posts')
//            ->upsert([
//                'user_id' =>12,
//                            'title'=>"X1",
//                            'slug'=>"X3",
//                            'excerpt'=>"inserted 7552555 slug",
//                            'description'=>"inserted 5725777 description",
//                            'is_published'=>false,
//                            'min_to_read'=>4
//            ],['title','slug']);



        // insert the new record and return id of it
//        $posts = DB::table('posts')
//            ->insertGetId([
//                'user_id' =>15,
//                'title'=>"second post",
//                'slug'=>"second slug",
//                'excerpt'=>"second excerpt",
//                'description'=>"second desc",
//                'is_published'=>true,
//                'min_to_read'=>93
//            ]);

//        $posts = DB::table('posts')
//            ->where('id',1019)
//            ->orWhere('id',1020)
//            ->update([
//                'excerpt'=>"Updated 21 excerpt",
//                'description'=>"Updated 21 desc",
//            ]);


//        $posts = DB::table('posts')
//            ->Where('id',1023)
//            ->increment('min_to_read',100);


//        $posts = DB::table('posts')
//            ->updateOrInsert(['description' => 'Updated 21 desc',
//                            'excerpt'=> "Updated 21 excerpt"],
//                            ['min_to_read' => 71]);

//        $posts = DB::table('posts')
//            ->Where('id',1025)
//            ->delete();

//        $posts = DB::table('posts')
//            ->Where('is_published',true)
//            ->count();

//        $posts = DB::table('posts')
//            ->sum('min_to_read');

//        $posts = DB::table('posts')
//            ->avg('min_to_read');

//        $posts = DB::table('posts')
//            ->where('is_published',false)
//            ->orWhereNot('min_to_read','<',20)
//        ->get();

//        if(DB::table('posts')->where('id',6524)->exists()){
//            dd('hiii');
//        }else{
//            echo ('hello');
//        }


                $posts = DB::table('posts')
                    ->whereBetween('min_to_read',[0,7])
                    ->get();

                 dump($posts);
//        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
