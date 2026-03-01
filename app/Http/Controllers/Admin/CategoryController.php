<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $categories = DB::table('categories')->paginate(2);
        //  $categories = DB::table('categories')->get();
        // dd($table);

        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        // dd($request);

        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::of($request->category_name)->slug('-'),
        // ]);


        $cat = new Category;
        $cat->category_name = $request->category_name;
        $cat->category_slug = Str::of($request->category_name)->slug('-');;
        $cat->save();



        // dd($cat);

        return redirect()->route('category.index')
                 ->with('success', 'Category created successfully!');

        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $categories = DB::table('categories')->where('id', $id)->first();
        $categories = Category::find($id);

        return view('admin.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $cat = DB::table('categories')->where('id', $id)->first();
        $cat = Category::find($id);

        // $cat->update([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::of($request->category_name)->slug('-'),
        // ]);

        $cat->category_name = $request->category_name;
        $cat->category_slug = $slug = Str::of($request->category_name)->slug('-');;
        $cat->save();


        // return redirect()->route('category.index');
          return redirect()->route('category.index')
                 ->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $cat = DB::table('categories')->where('id', $id)->first();
        $cat = Category::find($id);

        $cat->delete();
        return redirect()->back();
    }




}
