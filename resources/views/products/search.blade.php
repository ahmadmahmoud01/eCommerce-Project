@extends('master')
@section('content')
<div class="row m-5">
    <div class="col-sm-4">
        <a href="#">Filters</a>
    </div>

    <div class="col-sm-4 text-center ">
        <h3 class="mb-5">Result For Products</h3>
        @foreach ($products as $product)
        <hr>
        <div>
            <a href="{{ route('products.show', $product->id) }}">
                <img src="{{ $product->gallery }}" alt="" width="200px">
                <h6>{{ $product->name }}</h6>
                <h5>{{ $product->description }}</h5>
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection


