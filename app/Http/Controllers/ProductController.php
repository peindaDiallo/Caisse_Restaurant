<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::pluck('name','name')->all();
        $products = Product::all();
        return view('pages.products.index',compact('products','categories' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::pluck('name','name')->all();

        return view('pages.products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreproductRequest $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => '',
            'description' => '',
            'price' => '',
            'image' =>  '',
        ]);

        $requestData = $request->all();
        $fileName= time().$request->file('image')->getClientOriginalName();
        $path= $request->file('image')->storeAs('images', $fileName,'public');
        $requestData["image"] = '/storage/'.$path; Product::create($requestData);
        return redirect()->route('products.index')->with('toast_success', Lang::get('message.created'));
        /*  return redirect('product')->with('flash_message', 'Employee Addedd');*/

//  pour recuperer l'image on execute le commande:php artisan storage:link

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('toast_success', Lang::get('message.created'));

    }

    public function selectlist(string $field): Factory|View|Application
    {
        $products = Product::all();
        return view('pages.select.product', compact('field','products'));

    }
}
