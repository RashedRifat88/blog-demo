<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategoryController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $subCategories = SubCategory::all();
        $subCategories = DB::table('subcategories')->leftJoin('categories', 'subcategories.category_id', 'categories.id')
            ->select('categories.category_name', 'subcategories.*')->get();
        // return view('admin.sub_category.index', compact('subCategories'));

        $subCategories = SubCategory::all();
        // return response()->json($subCategories);
        return view('admin.sub_category.index', compact('subCategories'));
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
        return view('admin.sub_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category_name' => 'required|unique:subcategories|max:255',
        ]);

        // dd($request);

        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::of($request->category_name)->slug('-'),
        // ]);


        $sub_cat = new SubCategory;
        $sub_cat->category_id = $request->category_id;
        $sub_cat->sub_category_name = $request->sub_category_name;
        $sub_cat->sub_category_slug = Str::of($request->sub_category_name)->slug('-');
        $sub_cat->save();

        // dd($sub_cat);

        return redirect()->route('sub-category.index')
            ->with('success', 'Sub Category created successfully!');
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
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }


    
    public function edit(string $id)
    {
        // $categories = DB::table('categories')->where('id', $id)->first();
        $categories = Category::all();
        $sub_categories = SubCategory::find($id);

        return view('admin.sub_category.edit', compact('sub_categories','categories' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // // $cat = DB::table('categories')->where('id', $id)->first();
        // $cat = Category::find($id);

        // // $cat->update([
        // //     'category_name' => $request->category_name,
        // //     'category_slug' => Str::of($request->category_name)->slug('-'),
        // // ]);

        // $cat->category_name = $request->category_name;
        // $cat->category_slug = $slug = Str::of($request->category_name)->slug('-');;
        // $cat->save();


        // // return redirect()->route('category.index');
        //   return redirect()->route('category.index')
        //          ->with('success', 'Category updated successfully!');

        $sub_cat =  SubCategory::find($id);
        $sub_cat->category_id = $request->category_id;
        $sub_cat->sub_category_name = $request->sub_category_name;
        $sub_cat->sub_category_slug = Str::of($request->sub_category_name)->slug('-');;
        $sub_cat->save();

        // dd($cat);

        return redirect()->route('sub-category.index')
            ->with('success', 'Sub Category updated successfully!');
    }





    public function destroy(string $id)
    {
        $sub_cat = SubCategory::find($id);

        $sub_cat->delete();
        return redirect()->back();
    }

    
}
