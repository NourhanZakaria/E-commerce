
@extends('layouts.app')

@section('content')



<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="proName" class="form-label">Name</label>
      <input type="text" class="form-control" id="proName" name="categName" value="{{old("categName")}}">  
      @error('categName')
        <div style="color: red; font-weight: bold"> {{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label  class="form-label">Image</label>
      <input type="file" name="image"  class="form-control">
   </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection