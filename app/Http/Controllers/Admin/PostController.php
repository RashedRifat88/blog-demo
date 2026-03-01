<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;

class PostController extends Controller
{


    public function index()
    {

        // $posts = DB::table('posts')
        // ->leftJoin('categories', 'posts.category_id', 'categories.id')
        // ->leftJoin('subcategories', 'posts.sub_category_id', 'subcategories.id')
        // ->leftJoin('users', 'posts.user_id', 'users.id')
        // ->select('posts.*', 'categories.category_name', 'subcategories.sub_category_name', 'users.name')->get();

        $posts = Post::all();
        // // return response()->json($posts);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //  $categories = DB::table('categories')->paginate(2);
        //  $categories = DB::table('categories')->get();
        // dd($table);

        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);


        $category_id = DB::table('subcategories')->where('id', $request->sub_category_id)->first()->category_id;
        $slug = Str::of($request->title)->slug('-');


        $data = array();
        $data['category_id'] = $category_id;
        $data['sub_category_id'] = $request->sub_category_id;
        // $data['sub_category_id'] = $request->sub_category_id;
        $data['title'] = $request->title;
        $data['slug'] = $slug;
        $data['post_date'] = $request->post_date;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;
        $data['user_id'] = Auth::id();
        $data['status'] = $request->status;

        $image = $request->img;

        if ($image) {
            $imageName = $slug . '.' . $image->getClientOriginalExtension();
            // Image::read($image)->resize(300,200)->save('public/media/'.$imageName);

            $manager = new ImageManager(new Driver());

            $manager->read($image)
                ->resize(300, 200)
                ->save(public_path('media/' . $imageName));

            $data['img'] = 'media/' . $imageName;
        }

        DB::table('posts')->insert($data);

        return redirect()->route('post.index')
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    public function edit(string $id)
    {
        // $categories = DB::table('categories')->where('id', $id)->first();
        $categories = Category::all();
        $post = Post::find($id);

        return view('admin.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);


        $category_id = DB::table('subcategories')->where('id', $request->sub_category_id)->first()->category_id;
        $slug = Str::of($request->title)->slug('-');


        $data = array();
        $data['category_id'] = $category_id;
        $data['sub_category_id'] = $request->sub_category_id;
        // $data['sub_category_id'] = $request->sub_category_id;
        $data['title'] = $request->title;
        $data['slug'] = $slug;
        $data['post_date'] = $request->post_date;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;
        $data['user_id'] = Auth::id();
        $data['status'] = $request->status;

        $image = $request->img;

        if ($image) {


           //for old image
            $imagePathOld = public_path($request->old_image);
            if (File::exists($imagePathOld)) {
                File::delete($imagePathOld);
            }

            $imageName = $slug . '.' . $image->getClientOriginalExtension();
            // Image::read($image)->resize(300,200)->save('public/media/'.$imageName);

            $manager = new ImageManager(new Driver());

            $manager->read($image)
                ->resize(300, 200)
                ->save(public_path('media/' . $imageName));

            $data['img'] = 'media/' . $imageName;
        } else {
            $data['img'] = $request->old_image;
        }

        // DB::table('posts')->insert($data);
        DB::table('posts')->where('id', $id)->update($data);

        return redirect()->route('post.index')
            ->with('success', 'Post created successfully!');
    }





    public function destroy(string $id)
    {

        $post = Post::find($id);

        // echo $post->img;
        // echo "<br>";

        $imagePath = public_path($post->img);

        // echo $imagePath;
        // echo "<br>";

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $post->delete();

        $notification = array('message' => "Post Deleted", 'alert_type' => 'success');
        return redirect()->back()->with($notification);
    }
}
