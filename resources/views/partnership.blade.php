@extends('components.layouts.main')

@section('content')

<main class="partnership">

    <div class="header">
        <p class="head">Be <strong>Part</strong> Of Us!</p>
        <p class="text">Get maximum benefit by becoming Tease Seller! As an Indonesian local product, we commit to emphasize on having global standard quality. So Come join us and get special price, monthly discounts, cashbacks, banner, certificate, and extra exposures! Grow your business while get that healthy glow with us!</p>
    </div>

    <div id="myCarousel" class="carousel slide carousel-partner" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/7-Holy-Tease.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/11-Holy-Tease.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/15-Holy-Tease.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/12-Holy-Tease.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/9-Holy-Tease.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>
            </div>

        </div>
    </div>


    <div class="container marketing contain-partnership">

        <div class="benefit">
            <h1 class="head">Benefits</h1>
            <ul>
                <li>Mendapatkan harga khusus.</li>
                <li>Profit penjualan hingga 45%.</li>
                <li>Mendapatkan fasilitas sale bersama setiap bulan.</li>
                <li>Berkesempatan untuk memiliki peluang bisnis online & offline yang besar di kota kamu.</li>
                <li>Berkesempatan untuk memiliki cakupan bisnis yang lebih luas.</li>
                <li>Tidak ada batasan dalam memasarkan produk.</li>
                <li>Didampingi dan diberikan arahan dalampenjualan.</li>
                <li>Bergabung dalam group Official Seller dan memiliki banyak relasi.</li>
            </ul>
        </div>

        <div class="join">
            <h1 class="head">How To Join</h1>
            <ul>
                <li>Chat admin di Line Official @holytease atau <br> <a href="#">Tap Here</a></li>
                <li>Mengisi link registrasi dan format pemesanan. <br> (Pada tahap ini admin juga akan menginformasikan mengenai price list serta detail lengkap syarat dan ketentuan.)</li>
                <li>Jika sudah menyelesaikan proses registrasi dan pemesanan maka selanjutnya akan di invite ke group Official Seller dan mendapatkan Official Seller Card sesuai nomer urut.</li>
            </ul>
        </div>
    </div>


    <!-- FOOTER -->
    <div id="footer" class="footer-partnership">
        <div class="leftfoot">
            <div class="footerlogo">
                <img src="/img/holytease-logo.png" alt="">
            </div>
            <div class="info">
                <h1>INFO</h1>
                <p>home</p>
                <p>product</p>
                <p>partnership</p>
            </div>
        </div>
        <div class="copyright">&copy 2022 Tease</div>
    </div>
</main>


@endsection