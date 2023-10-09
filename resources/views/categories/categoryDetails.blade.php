@extends('layouts.app')

@section('content')


<div class="card" style="width: 18rem;">
    <img src="{{asset('images/categ_logo/'.$category->image)}}" class="card-img-top" alt="..." width="250px" height="250px">
    <div class="card-body">
        <h3 class="card-title">{{$category->name}}</h3>
        <a href="{{ route('categories.index') }}" class="btn btn-danger">Return to categories</a>
    </div>
</div>

<ul class="mt-5">
@foreach($category->product as $pro)

    <li>{{$pro->name}}</li>

@endforeach

</ul>

@endsection
