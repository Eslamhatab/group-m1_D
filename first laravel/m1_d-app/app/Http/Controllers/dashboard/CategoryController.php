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
        return view('dashobard.pages.categories.index');
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
