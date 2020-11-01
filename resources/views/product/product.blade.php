@extends('layouts.app')

@section('content')
<div class="container">
   <h3 class="title-page">Products</h3>

   <table class="table mt-5">
        <thead>
            <tr>
                <th>Product</th>
                <th>Categorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->categorie->name }}</td>
                <td> 
                  <a href="{{ route('product.show', $product->id) }}" class="btn btn-info"> Details </a>
            </tr>
        @endforeach
        </tbody>
   </table>
</div>
@endsection
