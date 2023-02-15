@extends('components.layouts.main')

@section('content')
<div id="myCarousel" class="carousel slide carousel-home" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" src="/img/7-Holy-Tease.jpg" aria-hidden="true"
                preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            </img>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="/img/15-Holy-Tease.jpg" aria-hidden="true"
                preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            </img>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="/img/9-Holy-Tease.jpg" aria-hidden="true"
                preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            </img>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="/img/10-Holy-Tease.jpg" aria-hidden="true"
                preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            </img>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="/img/16-Holy-Tease.jpg" aria-hidden="true"
                preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            </img>

            <div class="container">

            </div>
        </div>


    </div>
</div>

<div class="container container-home">
    <div class="main">
        <div class="box1">
            <div class="text">Let's #GrowAndGlow <br>With Tease!</div>
            <a href="#footer" class="story">Our Story</a href="#">
        </div>

        <div class="box2">
            <div class="box2-item">
                <img class="icon" src="/img/bpom.png" alt="alt"></img>
                <div class="caption">BPOM Approved</div>
            </div>
            <div class="box2-item">
                <img class="icon" src="/img/cruelty.png" alt="alt"></img>
                <div class="caption">Cruelty Free</div>
            </div>
            <div class="box2-item">
                <img class="icon" src="/img/premium.png" alt="alt"></img>
                <div class="caption">Premium Ingridients</div>
            </div>
        </div>

        <div class="box3">
            <div class="col1">
                <div class="pict1"><img src="/img/product/crop-HOLYTEASE2.jpg" alt="imgalt"></div>
                <div class="pict2"><img src="/img/product/crop-HOLYTEASE5.jpg" alt="imgalt"></div>
            </div>
            <div class="col2">
                <div class="pict1"><img src="/img/product/crop-HOLYTEASE3.jpg" alt="imgalt"></div>
                <div class="pict2"><img src="/img/product/crop-HOLYTEASE6.jpg" alt="imgalt"></div>
            </div>
            <div class="col3">
                <div class="pict1"><img src="/img/product/crop-HOLYTEASE8.jpg" alt="imgalt"></div>
                <div class="pict2"><img src="/img/product/crop-HOLYTEASE4.jpg" alt="imgalt"></div>
            </div>
        </div>

        <div class="box4"></div>
    </div>
    <!-- {{--    <div id="footer" class="footer">--}}
{{--        <div class="mainfoot">--}}
{{--            <div class="footertitle">Join #GrowAndGlow</div>--}}
{{--            <div class="caption">Share your story with us, cause your story is your own beauty.</div>--}}
{{--            <div class="sharestory">Share Your Story, Here</div>--}}
{{--            <div class="footerbox">--}}
{{--                <div class="footerlogo">--}}
{{--                    <img src="/img/holytease-logo.png" alt="" class="logo">--}}
{{--                </div>--}}
{{--                <div class="info">--}}
{{--                    <h1>INFO</h1>--}}
{{--                    <p>home</p>--}}
{{--                    <p>product</p>--}}
{{--                    <p>partnership</p>--}}
{{--                </div>--}}
{{--                <div class="copyright">&copy 2022 Tease</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}} -->

    {{--<div id="footer" class="footer">--}}
        {{-- <div class="mainfoot">--}}
            {{-- <div class="footertitle">Join #GrowAndGlow</div>--}}
            {{-- <div class="caption">Share your story with us, cause your story is your own beauty.</div>--}}
            {{-- <a href="#" class="sharestory">Share Your Story, Here</a>--}}
            {{-- <div class="footerbox">--}}
                {{-- <div class="leftfoot">--}}
                    {{-- <div class="footerlogo">--}}
                        {{-- <img src="/img/holytease-logo.png" alt="">--}}
                        {{-- </div>--}}
                    {{-- <div class="info">--}}
                        {{-- <h1>INFO</h1>--}}
                        {{-- <p>home</p>--}}
                        {{-- <p>product</p>--}}
                        {{-- <p>partnership</p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="copyright">&copy 2022 Tease</div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    @include('components.partials.footer')
</div>

@endsection