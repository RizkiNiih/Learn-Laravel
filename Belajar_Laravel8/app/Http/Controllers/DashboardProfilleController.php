<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profille;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardProfilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'profilles' => Profille::all()    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profilles = Profille::get();
        
        return view('dashboard.ussers.create', compact('profilles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name'          => 'required|min:5|max:255',
        //     'description'   => 'required|max:255',
        //     'price'         => 'required|max:255',
        // ]);
        

        $profille                = new Profille();

        $profille->name          = $request->title;
        $profille->slug          = $request->slug;
        $profille->category_id   = $request->category_id;
        $profille->category_id   = $request->category_id;
        $profille->save();

        return redirect('/dashboard/products')->with('success', 'New post has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Profille::where('id', $id)->first();

        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usser = Profille::where('id', $id)->first();
        
        return view('dashboard.ussers.edit', compact('usser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product                = Product::where('id', $id)->first();
        
        $product->name          = $request->name;
        $product->desciption    = $request->desciption;
        $product->price         = $request->price;  
        $product->save();

        return redirect('/dashboard/products')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
       $product = Product::destroy($id);

        return redirect('/dashboard/products')->with('success', 'Post has been deleted!');
    }   
}
