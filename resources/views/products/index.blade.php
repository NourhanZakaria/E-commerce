@extends('layouts.app')

@section('products')

<a href="{{ route('products.create')}}" class="btn btn-danger mb-5">Add Product</a>
<div class="row">
 

 @foreach($products as $pro)
  <div class="col-lg-4 mb-5">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('images/'.$pro['image'])}}" class="card-img-top" alt="..." height="300px" >
            <div class="card-body">
                    <h3 class="card-title">{{$pro['name']}}</h3> 
                    <a href="{{ route('products.show', $pro->id) }}" class="btn btn-primary">Show Details</a>
                    <form method="post" action="{{route('products.destroy',$pro->id)}}">
                     @csrf
                      @method('delete')
                      <button type="submit" onclick="return confirm('Are you sure to delete this product')"
                       class="btn btn-danger">Delete Product</button>
                      </form>
                    <a href="{{ route('products.edit',$pro->id)}}" class="btn btn-success mt-2">Edit Product</a>
            </div>
        </div>  
    </div>
 
  
  @endforeach  


</div>

{{ $products->links() }}

@endsection

