@extends('components.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $product->image }}" class="card-img-top p-3 rounded" alt="{{ $product->name }}">
                        </div>
                        <div class="col-md-6">
                            <h1 class="text-center m-5 d-block w-75 m-auto">{{ $product->name }}</h1>
                            <p class="text-center">{{ $product->description }}</p>
                            <p class="text-center">{{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
