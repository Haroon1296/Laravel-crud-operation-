@extends('layouts.master')
@section('content')

<table class="table tabel-responsive panel-dark">
    <br>
        <a href="{{url('/')}}" class="btn btn-warning">Back</a>
    <br><br>
    
    <tr><th>ID: </th><td>{{$product->id}}</td></tr>
    <tr><th>Product name: </th><td>{{$product->name}}</td></tr>
    <tr><th>Description: </th><td>{{$product->description}}</td></tr>
    <tr><th>Created at: </th><td>{{date('d-F-Y', strtotime($product->created_at))}}</td></tr>
</table>





@endsection
