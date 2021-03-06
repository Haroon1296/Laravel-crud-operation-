@extends('layouts.master')
@section('content')

@include('layouts.flashMesssage')

<br>
<a href="{{url('/')}}" class="btn btn-warning">Back</a>



<form class="text-center border border-light p-6" action="{{url('addProduct')}}" method="POST" autocomplete="off">
    @csrf
    <p class="h4 mb-4">Add Products</p>
    
    @error('name') {{$message}} @enderror
    <input type="text" name="name"  class="form-control mb-4" placeholder="Product name">
    
    @error('description') {{$message}} @enderror
    <textarea name="description" rows="3" class="form-control mb-4" placeholder="Product description"></textarea>
   
    <button class="btn btn-info btn-block my-4" type="submit">Create</button>

</form>


@endsection