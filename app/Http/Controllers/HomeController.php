<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        /**
         * Row SQL
         */

//        $insert = DB::insert('
//            INSERT
//            INTO posts (title, content)
//            VALUES (?,?)
//            ', ['Title №3', 'Text in title №3']);

//        $posts = DB::select("SELECT * FROM posts");
//        return $posts;

//        $update = DB::update('
//        UPDATE posts
//        SET created_at = :create, updated_at = :update
//        WHERE created_at IS NULL OR updated_at IS NULL
//        ',
//            [
//                'create' => NOW(),
//                'update' => NOW()
//            ]
//        );
//        var_dump($update);

//        $delete = DB::delete("
//            DELETE FROM posts WHERE id = :id",
//            [
//                'id' => 5,
//            ]
//        );
//        var_dump($delete);

//        DB::beginTransaction();
//        try {
//            DB::update('
//        UPDATE posts SET created_at = :create WHERE created_at IS NULL
//        ', ['create' => NOW()]);
//            DB::update('
//        UPDATE posts SET updated_at = :update WHERE updated_at IS NULL
//        ', ['update' => NOW()]);
//            DB::commit();
//        } catch (\Exception $e) {
//            DB::rollBack();
//            echo $e->getMessage();
//        }

//        $posts = DB::select('
//            SELECT * FROM posts WHERE id > :id
//            ',
//            ['id' => 1]
//        );
//        return $posts;

        /**
         * Query Builder
         */

//        $data =  DB::table('country')->get();
//        $data =  DB::table('country')->limit(5)->get();
//        $data =  DB::table('country')->select('Code', 'Name')
//            ->limit(5)->get();
//        $data =  DB::table('country')->select('Code', 'Name')->first();
//        $data =  DB::table('country')->select('Code', 'Name')
//            ->orderBy('Code', 'desc')->first();
//        $data =  DB::table('city')->select('ID', 'Name')
//            ->find(2);
//        $data =  DB::table('city')->select('ID', 'Name')
//            ->where('id','<',4)->get();
//        $data =  DB::table('city')->select('ID', 'Name')
//            ->where([
//                ['ID', '>', 1],
//                ['ID', '<', 5],
//            ])->get();
//        $data =  DB::table('city')
//            ->where('ID', '<', 5)->value('Name');
//        $data =  DB::table('country')->limit(10)->pluck('Name','Code');
//        $data =  DB::table('country')->count();
//        $data =  DB::table('country')->max('Population');
//        $data =  DB::table('country')->sum('Population');
//        $data =  DB::table('country')->avg('Population');
//        $data =  DB::table('city')->select('CountryCode')->distinct()->get();

//        $data = DB::table('city')
//            ->select('city.ID',
//                'city.Name as city_name',
//                'country.Code',
//                'country.Name as country_name'
//            )->limit(10)
//            ->join('country',
//                'city.CountryCode',
//                '=',
//                'country.Code'
//            )->orderBy('city.ID')
//            ->get();
//        dd($data);
//        return $data;

        /**
         * Eloquent ORM
         */

//        $data = Country::all();
//        $data = Country::query()->limit(5)->get();
//        $data = Country::query()->where('Code', '<', 'ALB')
//            ->select('Code','Name')->offset(1)->limit(2)->get();
//        $data = City::query()->find(5);
//        $data = Country::query()->find('AGO');
//        dd($data);

//        $post = new Post();
//        $post->title = ' Article №3';
//        $post->content = 'Lorem ipsum 3';
//        $post->save();

//        Post::query()->create([
//            'title' => 'Article №4',
//            'content' => 'Lorem ipsum 4'
//        ]);

//        $post = new Post();
//        $post->fill([
//            'title' => 'Article №5',
//            'content' => 'Lorem ipsum 5'
//        ]);
//        $post->save();

//        $post = Post::query()->find(7);
//        $post->content = 'Update Content';
//        $post->save();

//        Post::query()->where('id', '>', 3)
//            ->update([
//                'updated_at' => NOW()
//            ]);

//        $post = Post::query()->find(7);
//        if ($post != null) {
//            $post->delete();
//        }

//        Post::destroy(5,8);

        /**
         * Eloquent ORM with Relations
         */

//        $post = Post::query()->find(1);
//        dump($post->rubric);

//        $rubric = Rubric::query()->find(2);
//        dump($rubric->post->title);

//        $posts = Rubric::query()->find(2)->posts;
//        dump($posts);

//        $posts = Rubric::query()->find(2)->posts()
//            ->select('title')
//            ->get()
//            ->toArray();
//        dump($posts);

//        $posts = Post::query()
//            ->with('rubric')
//            ->get()
//            ->toArray();
//        dump($posts);

//        $posts = Post::query()
//            ->with('tags')
//            ->where('id', '=', 2)
//            ->get()
//            ->toArray();
//        dump($posts);

//        $tags = Tag::query()
//            ->with('posts')
//            ->where('id', '=', 1)
//            ->get()
//            ->toArray();
//        dump($tags);





//        dump($_ENV);
//        dump(env('DB_DATABASE'));
//        dump(config('app.timezone'));

        return view('home', [
            'count' => 24,
            'name' => 'Yura'
        ]);
    }
}
