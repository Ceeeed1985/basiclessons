@extends('layouts.master')

@section('title')
     | Services
@endsection

@section('content')
    
<h1>Détail du produit</h1>
<hr>

<div class="well">
    <h2>{{$produit->product_name}}</h2>
    <h3>$ {{$produit->product_price}}</h3>
    <p>{{$produit->product_description}}</p>
    <hr>
    <span>{{$produit->created_at}}</span>
    <hr>

    <a href="{{url('editproduct', [$produit->id])}}" class="btn btn-primary">Editer</a>
    
    <form action="{{url('deleteproduct', [$produit->id]) }}" method="POST" class="pull-right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Supprimer</button>
    </form>
</div> 

@endsection

