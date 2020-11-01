@extends('layouts.app')

@section('content')
<div class="container">
   <h3 class="title-page mb-5">
        <a href="{{ route('product.index') }}"> Product </a> / new
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

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Categorie:</strong>
                    <select class="form-control" name="categorie_id">
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
