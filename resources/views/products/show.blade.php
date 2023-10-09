
@extends('layouts.app')

@section('content')



<div class="card" style="width: 18rem;">
    <img src="{{asset('images/'.$product->image)}}" class="card-img-top" alt="..." width="250px" height="250px">
    <div class="card-body">
        <h3 class="card-title">name of product:{{$product->name}}</h3>
        <h4 class="card-title">Category Name:{{$product->category->name}}</h4>
        <h4 class="card-title">price of product:{{$product->price}}</h4>
        <p class="card-text">description of product:{{$product->description}}</p>
        <a href="{{ route('products.index') }}" class="btn btn-danger">Return to products</a>
    </div>
</div>

@endsection


