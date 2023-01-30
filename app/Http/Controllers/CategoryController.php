<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Controllers\redirect;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $data = $request->all();
        //dd($data);
        Category::create($data);
        return redirect()->route('categories.index')->with('toast_success',Lang::get('message.created'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function show(string $id)
    {

        $categorie =Category::find(decrypt($id));
        $categorie->with('products')->get();
        return view('pages.categories.show', compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function edit(string $id )
    {
        $categorie =Category::find(decrypt($id));
        return view('pages.category.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);
        $categories = Category::find(decrypt($id));
        $categories->update( $request->all());

        return redirect()->route('categories.index')->with('toast_success',Lang::get('message.created'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $category ->delete();
        return redirect()->route('categories.index')->with('toast_success',Lang::get('message.created'));

    }

    public function selectlist(string $field)
    {
        $categories = Category::all();
       // dd($categories);
        return view('pages.select.category', compact('field','categories'));

    }
}
