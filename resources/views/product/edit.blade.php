@extends('layouts.master')
@section('content')

@include('layouts.flashMesssage')

<br>
<a href="{{url('/')}}" class="btn btn-warning">Back</a>



<form class="text-center border border-light p-6" action="{{url('updateProduct', $product->id)}}" method="POST" autocomplete="off">
    @csrf
    <p class="h4 mb-4">Update Product</p>
    
    @error('name') {{$message}} @enderror
    <input type="text" name="name" value="{{$product->name}}"  class="form-control mb-4" placeholder="Product name">
    
    @error('description') {{$message}} @enderror
    <textarea name="description" rows="3" class="form-control mb-4" placeholder="Product description">{{$product->description}}</textarea>
   
    <button class="btn btn-info btn-block my-4" type="submit">Update</button>

</form>


@endsection