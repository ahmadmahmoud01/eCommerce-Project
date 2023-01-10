@extends('master')
@section('content')
<div class="row m-5">
    <div class="col-sm-6">
        <img src="{{ $product->gallery }}" alt="" width="300px">
    </div>

    <div class="col-sm-6">
        <a href="{{ route('products.index') }}">Back</a>
        <h2>{{ $product->name }}</h2>
        <h4>Price : {{ $product->price }}</h4>
        <h4>Details : {{ $product->description }}</h4>
        <h4>Category : {{ $product->category }}</h4>
        <br><br>
        <button class="btn btn-primary">Add To Cart</button>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
    </div>

</div>
@endsection


