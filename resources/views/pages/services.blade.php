@extends('layouts.master')

@section('title')
     | Services
@endsection

@section('content')
    
<h1>Bienvenue sur la page de services</h1>

@if (Session::has('status'))
    <div class="alert alert-success">
        {{Session::get('status')}}
    </div>
@endif

<a href='{{route('create')}}' class="btn btn-primary">Nouveau produit</a>

@foreach ($produits as $produit)
<div class="well bg-light py-2 px-3 my-2 border rounded">
    <h4><a class="text-decoration-none" href="/show/{{$produit->id}}">{{$produit->product_name}}</a></h4>
</div> 
@endforeach
{{-- <div class="links">
{{$produits->links()}}
</div> --}}
@endsection

