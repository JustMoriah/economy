@extends('layouts.app')

@section('title','Edit Product')

@section('content')
<h1>Edit Product</h1>
<form action="/product/{{$product->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre:
        <input type="text" name="name" value="{{$product->name}}">
    </label>
    <br>
    <label>
        Description:
        <input type="text" name="description" value="{{$product->description}}">
    </label>
    <br>
        Price:
    <input type="number" name="price" value="{{$product->price}}">
</label>
<br>
    <label>
        Stock:
        <input type="number" name="stock" value="{{$product->stock}}">
    </label>
    <br>
    <button type="submit">
        Update Product
    </button>
</form>
@endsection
