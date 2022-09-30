<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
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

//        return view('home', [
//            'count' => 24,
//            'name' => 'Yura'
//        ]);

        /**
         * Session
         */

        // set
        $request->session()->put('test', 'Test Value');
        session(['cart'=>[
            ['id' => 1, 'product' => 'title 1'],
            ['id' => 2, 'product' => 'title 2'],
        ]]);
        $request->session()->push('cart', ['id' => 3, 'product' => 'title 3']);

        // get
//        dump($request->session()->all());
//        dump(session('cart')[0]['product']);
//        dump($request->session()->get('cart')[1]['product']);

        // delete
//        dump($request->session()->pull('test'));
//        $request->session()->forget('test');
//        $request->session()->flush();

        /**
         * Cookies
         */

        // set
        Cookie::queue('test', 'Test Cookies', 5);

        // get
//        dump(Cookie::get('test'));

        // delete
//        Cookie::queue(Cookie::forget('test'));

        /**
         * Cache
         */
        // set
//        Cache::put('key', 'Cache Value', 300);
//        Cache::forever('key', 'Cache Value');

        // get
//        dump(Cache::get('key'));

        // delete
//        dump(Cache::pull('key'));
//        Cache::forget('key');
//        Cache::flush();

        /**
         * Return view
         */

        $title = 'Home Page';
        $h1 = '<h3>home page</h3>';
        $data = [
            'title' => 'Title from array',
            'content' => 'Content from array',
            'keys' => 'Keys from array'
        ];

        /**
         * Cache post
         */
//        if(Cache::has('posts')){
//            $posts = Cache::get('posts');
//        } else {
//            $posts = Post::query()
//                ->with('tags')
//                ->orderByDesc('created_at')
//                ->get();
//            Cache::put('posts', $posts);
//        }

        $posts = Post::query()
            ->with('tags')
            ->orderByDesc('created_at')
            ->paginate(3);

        return view('home', compact('title', 'h1', 'data', 'posts'));
    }

    public function create()
    {
        $title = 'Create Page';
        $rubrics = Rubric::query()->pluck('title','id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
//        $this->validate($request,[
//            'title' => 'required|min:5|max:100',
//            'content' => 'required',
//            'rubric_id' => 'required|integer'
//        ]);

        $rules = [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'required|integer'
        ];

        $messages = [
            'title.required' => 'This is a required field',
            'title.min' => 'Min value equal 5',
            'title.max' => 'Max value equal 5'
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        Post::query()->create($request->all());

        $request->session()->flash('success', 'Данные сохранены!');

        return redirect()->route('home');
    }
}
