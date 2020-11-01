@extends('layouts.app')

@section('content')
<div class="container">
   <h3 class="title-page mb-5">
        <a href="{{ route('categorie.index') }}"> Categorie </a> / 
        {{ $categorie->name }} 
    </h3>
    <form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST">
    <a href="{{ route('categorie.edit', $categorie->id) }}" class="btn btn-primary"> Update </a>
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
</div>
@endsection
