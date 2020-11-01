@extends('layouts.app')

@section('content')
<div class="container">
   <h3 class="title-page mb-5">
        <a href="{{ route('categorie.index') }}"> Categorie </a> / 
        {{ $categorie->name }} 
    </h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorie.update', $categorie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $categorie->name }}" class="form-control" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
