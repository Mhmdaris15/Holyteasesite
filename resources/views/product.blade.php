@extends('components.layouts.main')

@section('content')
<div class="container">
    {{-- <div class="row">
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
    </div> --}}
    <div class="container-deproduct">
        <div class="left">
            <div class="pict">
                <img src="{{ asset($product->product_image) }}" alt="img" />

                {{-- add image from public --}}
            </div>
        </div>
        <div class="right">
            <div class="pr-name">
                <p>{{ $product->name }}</p>
            </div>
            <div class="pr-prize">
                <p>Rp. 15.000,00</p>
            </div>
            <a href="/#" class="add-cart">ADD TO CART</a>
            <div class="desc">
                <p>
                    Masker Organik yang mengandung bunga Chamomile dan ekstrak Sakura
                    ini memiliki berbagai manfaat untuk wajah. <br /><br />
                    Yaitu membuat tekstur kulit menjadi lebih halus dan kenyal, dapat
                    membantu meringankan peradangan pada kulit, dan membuat kulit wajah
                    menjadi lebih sehat. <br><br>
                    {{ $product->description }}
                </p>
            </div>
            <div class="drop">
                <div class="btn-drop">
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                        id="btnDetails">
                        DETAILS
                    </button>
                    <button class="btn btn-outline-light" type="button" data-toggle="collapse"
                        data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"
                        id="btnBenefits">
                        BENEFITS
                    </button>
                </div>
                <div class="collapse col-details" id="collapseExample">
                    <div class="card card-body" style="color: #517d40">
                        <strong>Ingridients:</strong> {{ $product->description }}
                    </div>
                </div>
                <div class="collapse col-benefits" id="collapseExample2">
                    <div class="card card-body" style="color: #517d40">
                        Mengandung Alovera dan Mint yang dapat
                        <ul>
                            <li>Menenangkan kulit wajah</li>
                            <li>Menyegarkan kulit wajah</li>
                            <li>Membantu menghilangkan jerawat</li>
                            <li>Melembabkan kulit wajah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection