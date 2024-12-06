
@extends('layouts.master')

@section('title')
     | Modifier produit
@endsection

@section('content')
    
<h1>Modifier produit ?</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('updateproduct', [$product->id])}}" method="POST" class="form-horizontal">
    @csrf
    @method("PUT")
    <div class="form-group mb-2">
        <label class="fw-bold">Produit</label>
        <input type="text" name="product_name" value="{{$product->product_name}}" placeholder="Product Name" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label class="fw-bold">Prix</label>
        <input type="number" name="product_price" value="{{$product->product_price}}" placeholder="Product Price" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label class="fw-bold">Description du produit</label>
        <textarea name="product_description" placeholder="Product Description" cols="100" rows="5" class="form-control" required>{{$product->product_description}}</textarea>
    </div>
    <input type="submit" value="Modifier Produit" class="btn btn-primary">


</form>

@endsection
