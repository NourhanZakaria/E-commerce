@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="form col-md-8">
              <form method="post" action="{{route('products.update',$product->id)}}">
                @csrf
                @method('put')
                    <div class="mb-3 col-md-12">
                        <input type="text" name="name" class="form-control w-50" value="{{$product->name}}">
                    </div>

                    <div class="mb-3 col-md-12">
                        <input type="text" name="price" class="form-control w-50" value="{{$product->price}}" >
                    </div>

                    <div class="mb-3 col-md-12">
                        <input type="text" name="description" class="form-control w-50" value="{{$product->description}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category </label>
                        <select class="form-select"  name='category_id' aria-label="Default select example">
                            <option selected disabled value="">Open this select menu</option>
                            @foreach($categ as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                  
                        </select>
                      </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block mt-3">Update Product </button>
                    </div>

               </form>
            </div>
    </div>
@endsection
