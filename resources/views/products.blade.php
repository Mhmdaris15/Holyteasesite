@extends('components.layouts.main')

@section('content')

<style>
    .footer {
        display: flex;
        justify-content: center;
        /* min-height: 100vh; */
        width: 100%;
        background-color: #fe661f;
        color: #ffff;
        font-size: 30px;
        font-family: poppins, sans-serif;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
    }

    .footer .mainfoot {
        width: 90%;
        margin-top: 70px;
    }

    .footer .mainfoot .footertitle {
        font-size: calc(1em + 1vw);
        font-weight: bold;
    }

    .footer .mainfoot .caption {
        font-size: calc(0.3em + 1vw);
        opacity: 0.8;
    }

    .footer .mainfoot .sharestory {
        display: flex;
        justify-content: center;
        background-color: #fff;
        color: #fe661f;
        margin-top: 50px;
        border-radius: 50px;
        font-size: calc(0.6em + 1vw);
        padding: 5px 0;
    }

    .footer .mainfoot .footerbox {
        display: flex;
        justify-content: left;
        align-items: center;
        margin: 150px 0 80px 0;
        /* width: 500px; */
        position: relative;
    }

    .footer .mainfoot .footerbox .footerlogo {
        text-align: left;
        /* width: 50%; */
    }

    .footer .mainfoot .footerbox .footerlogo img {
        width: 150%;
    }

    .footer .mainfoot .footerbox .info {
        /* width: 50%; */
        height: 100%;
        margin-left: 150px;
        font-family: poppins, sans-serif;
        /* font-size: 0.8em; */
        font-size: calc(0.6em + 1vh);
    }

    .footer .mainfoot .footerbox .info p {
        margin-top: 20px;
        line-height: 5px;
        opacity: 0.7;
        text-transform: capitalize;
    }

    .footer .mainfoot .copyright {
        position: absolute;
        bottom: 0;
        right: 0;
        font-size: 0.7em;
    }

    body {
        background-color: #F1EBD5;
    }

    .product-container {
        column-gap: 2px;
        row-gap: 50px;
    }


    .product {
        /*height: 30vh;*/
        padding: 10px;
        /*transform: scale(0.5);*/
        /*overflow: hidden;*/
        background-position: center;
        background-size: cover;
<<<<<<< HEAD
=======
        cursor: pointer;
>>>>>>> 8b9604006f270f14b8794cda478172bd193682cd
        /*background-image: url("https://images.unsplash.com/photo-1416339306562-f3d12fefd36f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&s=263af33585f9d32af39d165b000845eb");*/
    }

    .product:before {
        content: "";
        display: block;
        padding-top: 100%;
    }

    .product-name {
        /*position: relative;*/
        /*translate: 50% 100%;*/
        /*bottom: -20%;*/
        z-index: 2;
    }

    .price {
        height: 50%;
        background-color: bisque;
        width: 70%;
        transform: translateY(60%);
    }

    @media (min-width: 992px) {
        .col-lg-1-5 {
            width: 12.5%;
        }

        .col-lg-2-5 {
            width: 20.83333%;
        }

        .col-lg-3-5 {
            width: 29.16667%;
        }

        .col-lg-4-5 {
            width: 37.5%;
        }

        .col-lg-5-5 {
            width: 45.83333%;
        }

        .col-lg-6-5 {
            width: 54.16667%;
        }

        .col-lg-7-5 {
            width: 62.5%;
        }

        .col-lg-8-5 {
            width: 70.83333%;
        }

        .col-lg-9-5 {
            width: 79.16667%;
        }

        .col-lg-10-5 {
            width: 87.5%;
        }

        .col-lg-11-5 {
            width: 95.8333%;
        }
    }
</style>
<main class="mb-5 pb-5">

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="product-container row m-auto text-center d-flex justify-content-center">
        @foreach($products as $product)
<<<<<<< HEAD
        <div style="background: url('img/{{ $product->model_image }}'); background-size: cover"
=======
        <a href="{{ url("/products/{$product->id}") }}" style="background: url('{{ $product->model_image }}');
            background-size: cover"
>>>>>>> 8b9604006f270f14b8794cda478172bd193682cd
            class="product col-lg-3-5 col-sm-5 col-xs- m-auto position-relative mb-2">
            <div style="background-color: #CF578A"
                class="product-name text-light position-absolute start-50 translate-middle m-auto rounded-pill w-75 pt-2">
                {{ $product->short_name }}
<<<<<<< HEAD
                <div style="background-color: #FE661F" class="price m-auto rounded-pill w-75">Rp {{ $product->price }},-
                </div>
            </div>
        </div>
=======
                <div style="background-color: #FE661F" class="price m-auto rounded-pill w-75">{{ $product->price }}
                </div>
            </div>
        </a>
>>>>>>> 8b9604006f270f14b8794cda478172bd193682cd
        @endforeach
    </div>
</main>

@include('components.partials.footer')
@endsection