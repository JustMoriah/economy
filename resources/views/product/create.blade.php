@extends('layouts.app')

@section('title','Create Product')

@section('content')
<h1>Create Product</h1>
<form action="/product" method="post">
    @csrf
    <label>
        Name:
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Description:
        <input type="text" name="description">
    </label>
    <br>
        Price:
        <input type="number" name="price">
    </label>
    <br>
    <label>
        Stock:
        <input type="number" name="stock">
    </label>
    <br>
    <button type="submit">
        Create Product
    </button>
</form>
@endsection
