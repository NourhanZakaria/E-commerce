@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="form col-md-8">
              <form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="mb-3 col-md-12">
                        <label for="cat">Category Name</label>
                        <input type="text" id="cat" name="categName" class="form-control w-50" value="{{$category->name}}">
                    </div>

                

                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block mt-3">Update Category </button>
                    </div>

               </form>
            </div>
    </div>
@endsection
