<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;
class productController extends Controller
{
    
    function __construct(){
        $this->middleware('auth')->only(['store','edit','create','destroy']); 
        $this->middleware(['Amazone'])->only(['store']);
    }

    function index(){

        $products=Product::paginate(5);
        return view('products.index',["products"=>$products]);
    }
  
    function show(Product $product){ 
    
        return view('products.show', ["product" => $product]);
         
    }

    function create(){
        $categ=Category::all();
        return view('products.create',["categ" =>$categ]);
    }

    function store(Request $request){    
        $request->validate([
 
            "name"=>"required|min:3",
            "description"=>"required"
        ]);
        
          $request['creator_id']=Auth::id();  
          Product::create($request->all());
          return to_route("products.index");
        
    }
   
    function edit(Product $product){  

       
       $user=Auth::User();
       $response=Gate::inspect('update_destroy',$product);
  
       if($response->allowed()||Gate::allows('is-admin')){
            $category=Category::all();     
            return view('products.edit',["product" => $product,"categ"=>$category]);
       }
  
       return abort(403); 
         
    }

    function update(Request $request,Product $product){
   
        $product->update($request->all());

        return to_route("products.index");
    }

    
    function destroy(Product $product){ 
        $user=Auth::User();
        $response=Gate::inspect('update_destroy',$product);

        if($response->allowed()||Gate::allows('is-admin')){
            $product->delete();     
            return to_route("products.index");  
        }
   
        return abort(403); 
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }


}
