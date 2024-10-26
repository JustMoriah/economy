@extends('layouts.app')

@section('title','Products N Stuff')

@section('content')
@include('sweetalert::alert')
    <h1>Products</h1>
    <p>Give us money! :D</p>

    <a href="/product/create" class="btn btn-success">New Product</a>
    <br>
    <table class="table table-dark">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        @foreach ($products as $product)

            <tr>
                <td>
                    <h3>{{$product->id}}</h3>
                    </td>
                <td>
                <h3>{{$product->name}}</h3>
                </td>
                <td>
                    <h3>{{$product->description}}</h3>
                </td>
                <td>
                    <h3>{{$product->price}}</h3>
                </td>
                <td>
                    <h3>{{$product->stock}}</h3>
                </td>
                <td>
                    <button class="btn btn-success"><a href="/product/{{$product->id}}">Show</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/product/{{$product->id}}/editar">Edit</a></button>
                </td>
                <td>
                    <form action="/product/{{$product->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-danger">
                                Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{$products->links()}}
@endsection
