@extends('layouts.app')

@section('products')

<a href="{{ route('categories.create')}}" class="btn btn-danger mb-5">Add Category</a>
<div class="row">
 
    <table>
       <th>ID</th>
       <th>Name</th>
       <th>Image</th>
       <th>Show</th>
       {{-- <th>Delete</th> --}}
       <th>Edit</th>

   @foreach($category as $categ)
    <tr>
      <td>{{$categ->id}}</td>
      <td>{{$categ->name}}</td>
      <td><img src="{{asset('images/categ_logo/'.$categ->image)}}" width="50px"></td>
      <td><a href="{{ route('categories.show',$categ->id) }}" class="btn btn-primary">Show</a></td>
      <td>
        <form action="{{route('categories.destroy', $categ->id)}}" method="post">
          @csrf
          @method('delete')
            <input type="submit"   class="btn btn-danger" value="Delete">
         </form>

      </td>
        <td><a href="{{ route('categories.edit',$categ->id) }}" class="btn btn-success mt-2">Edit</a></td>
      </td>
    </tr>

   @endforeach

      
    </table>
 


</div>


@endsection

