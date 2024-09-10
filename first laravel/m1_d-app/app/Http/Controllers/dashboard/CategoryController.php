<?php

namespace App\Http\Controllers\dashboard;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = category::orderBy('id' , 'desc')->simplePaginate(4);
        return view('dashobard.pages.categories.index ' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashobard.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'          => 'required|string|unique:categories,title|max:255',
            'description'    => 'nullable|string|max:1020',
            'create_user_id' => 'nullable|exists:users,id',
            'update_user_id' => 'nullable|exists:users,id',
        ]);
        //Create
        $category        = new category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->create_user_id = auth()->user()->id;
        $category->update_user_id    = null;
        $category->save();
        return redirect()->route('categories.index')->with('Created_Category_successfully ', "The Category ($category->title) has been Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = category::find($id);
        if($category == null){
            return view('dashobard.pages.categories.404.category-404');
        }
        return view('dashobard.pages.categories.show' , compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( int $id)
    {
        $category = category::find($id);
        if($category == null){
            return view('dashobard.pages.categories.404.category-404');
        }
        else{
            if(auth()->user()->user_type  == "admin"){
                return view('dashobard.pages.categories.edit' , compact('category'));
            }
            else{
                return view('dashobard.pages.categories.404.category-404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:1020',
                'create_user_id' => 'nullable|exists:users,id',
                'update_user_id' => 'nullable|exists:users,id',
            ]);
            //update Category
            $category_old = category::find($id);
            $category     = category::find($id);
                $category->title = $request->title;
            if($category->title == $request->title){
                $category->title = $category->title;
            }
            else{
                $category->title = $request->title;
            }
            $category->description = $request->description;
            $category->update_user_id = auth()->user()->id;
            $category->save();
            return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
