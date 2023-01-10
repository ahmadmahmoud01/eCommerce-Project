@extends('master')
@section('content')
<div class="row my-5">
    @foreach ($products as $product)
        <div class="col-md-3 mx-3">
            <div class="card d-inline-block" style="width: 300px; height: 500px">
                <img src="{{ $product->gallery }}" class="card-img-top p-3" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">$ {{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">show</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


