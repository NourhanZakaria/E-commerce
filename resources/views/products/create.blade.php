
@extends('layouts.app')

@section('content')



<form action="{{route('products.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="proName" class="form-label">Name</label>
      <input type="text" class="form-control" id="proName" name="name" value="{{old("name")}}">  
      @error('name')
        <div style="color: red; font-weight: bold"> {{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <input type="text" class="form-control" id="desc" name="description" value="{{old("description")}}"> 
        @error('description')
        <div style="color: red; font-weight: bold"> {{$message}}</div>
      @enderror      
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price" value="{{old("price")}}">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image">       
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
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection