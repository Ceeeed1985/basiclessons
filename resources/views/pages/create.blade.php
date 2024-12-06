
@extends('layouts.master')

@section('title')
     | Nouveau produit
@endsection

@section('content')
    
<h1>Prêt à créer un nouveau produit ?</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('saveproduct')}}" method="POST" class="form-horizontal">
    @csrf

    <div class="form-group mb-2">
        <label class="fw-bold">Produit</label>
        <input type="text" name="product_name" placeholder="Produit" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label class="fw-bold">Prix</label>
        <input type="number" name="product_price" placeholder="Prix du produit" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label class="fw-bold">Description du produit</label>
        <textarea name="product_description" placeholder="Description du produit" cols="100" rows="5" class="form-control" required></textarea>
    </div>
    <input type="submit" value="Ajouter Produit" class="btn btn-primary">


</form>

@endsection
