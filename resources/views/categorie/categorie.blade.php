@extends('layouts.app')

@section('content')
<div class="container">
   <h3 class="title-page">Categories</h3>
   <a href="{{ route('categorie.create') }}" class="btn btn-primary"> Create </a>

   @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

   <table class="table mt-5">
        <thead>
            <tr>
                <th>Categorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->name }}</td>
                <td> 
                  <a href="{{ route('categorie.show', $categorie->id) }}" class="btn btn-info"> Details </a>
            </tr>
        @endforeach
        </tbody>
   </table>
</div>
@endsection
