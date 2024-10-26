@extends('layouts.app')

@section('title')
    Product {{$product->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<h1>Product Info.</h1>
<ul>
    <li>ID: {{$product->id}}</li>
    <li>Name:{{$product->name}}</li>
    <li>Description: {{$product->description}}</li>
    <li>Price: {{$product->price}}</li>
    <li>Stock: {{$product->stock}}</li>
</ul>
<br>
<a href="/product">Return to index</a>
@endsection
