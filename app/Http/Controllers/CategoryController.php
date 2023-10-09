<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     function __construct(){
        $this->middleware(['Amazone'])->only(['store']);
    }
    

    public function index()
    {
        $category=Category::all();
        return view("categories.cards",["category"=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
        $request_data = $request->all();
        if($request->hasFile("image")){
            $logo= $request_data["image"];
            $path = $logo->store("categ_logo",'categ_uploads' );
            $request_data["image"]= $path;
          
        }

       
        $request->validate([
            "categName"=>"required|min:3"
        ]);

      
       $request_data["name"]=$request->categName;

        Category::create($request_data);

        return to_route("categories.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.categoryDetails',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
       return to_route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image){
            try {
                unlink("images/categ_logo/{$category->image}");
            }catch (\Exception $e){
                dd($e);
            }
        }

        $category->delete();
        return to_route("categories.index");
    }
}
