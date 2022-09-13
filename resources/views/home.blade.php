@extends('components.layouts.main')

@section('content')
    <div id="myCarousel" class="carousel slide carousel-home" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/example.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <!-- <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/example2.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <!-- <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="/img/example3.jpg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </img>

                <div class="container">
                    <!-- <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
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
                <div class="pict1"><img src="/img/example3.jpg" alt=""></div>
                <div class="pict2"><img src="/img/example2.jpg" alt=""></div>
            </div>
            <div class="col2">
                <div class="pict1"><img src="/img/example.jpg" alt=""></div>
                <div class="pict2"><img src="/img/example3.jpg" alt=""></div>
            </div>
            <div class="col3">
                <div class="pict1"><img src="/img/example.jpg" alt=""></div>
                <div class="pict2"><img src="/img/example3.jpg" alt=""></div>
            </div>
        </div>

        <div class="box4"></div>
    </div>
    <div id="footer" class="footer">
        <div class="mainfoot">
            <div class="footertitle">Join #GrowAndGlow</div>
            <div class="caption">Share your story with us, cause your story is your own beauty.</div>
            <div class="sharestory">Share Your Story, Here</div>
            <div class="footerbox">
                <div class="footerlogo">
                    <img src="/img/holytease-logo.png" alt="" class="logo">
                </div>
                <div class="info">
                    <h1>INFO</h1>
                    <p>home</p>
                    <p>product</p>
                    <p>partnership</p>
                </div>
                <div class="copyright">&copy 2022 Tease</div>
            </div>
        </div>
    </div>
</div>

@endsection