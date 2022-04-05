@extends('layout')

@section('title', 'Nature\'s Gift')

@section('content')

<!--Slider-->
<section class="hero">
<div class="row">
    <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/hero-1.png" alt="">
                <div class="content">
                <h1>Super market vegbox
                    <br>
                    start from
                    <span>$9</span>
                </h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto quo, ipsam sequi quia, porro cum incidunt exercitationem totam repellat beatae distinctio perspiciatis ea nesciunt consectetur, reiciendis dolores sed assumenda laboriosam!</p>
                <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="images/hero-2.png" alt="">
                <div class="content">
                    <h1>Your first Order
                    <br>
                    <span>20% off</span>
                    at juice
                    </h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quos, illo dolorem porro rem consequatur accusantium cupiditate. Incidunt iste laboriosam aliquid modi est autem sit reprehenderit laborum officia, velit pariatur!</p>
                <a href="#">Shop Now</a>
            </div>
            </div>
            <div class="swiper-slide">
                <img src="./images/hero-3.png" alt="">
                <div class="content">
                    <h1>Your First Order
                        <br>
                        <span>20% off</span>
                        at Juice
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tempore aliquid deserunt maxime velit voluptatem voluptatibus iste modi et! Libero error cupiditate esse praesentium voluptas alias fugit sapiente aspernatur omnis.</p>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>    
</div>
<!--Carousel Navigation-->
<div class="arrows d-flex">
    <div class="swiper-prev d-flex">
        <i class="bx bx-chevrons-left swiper-icon"></i>
    </div>
    <div class="swiper-next d-flex">
        <i class="bx bx-chevrons-right swiper-icon"></i>
    </div>
</div>
</section>
{{-- Collection Products --}}
<section class="section promotion">
<div class="container">
    <div class="title">
        <h2>Shop Collection</h2>
        <span>Select from the premium product and save plenty of money</span>
    </div>
    @foreach($products as $product)
    @if($product->price < 10)
    <div class="promotion-layout container">
        <div class="col-4">
        <div class="promotion-item">
            @if($product->imagePath != null)
                <img src="{{getImageUrl($product->imagePath)}}" alt="">
            @endif
            <div class="promotion-content">
                <h3>$product->name</h3>
                <a href="{{route("productInfo", ['id' => $product->id])}}">SHOP NOW</a>
            </div>
        </div>
        </div>
    </div>
    @endif    
    @endforeach
</div>
</section>
<!--Featured Products-->
<section class="section featured">
<div class="container">
    <div class="title">
        <h2>Featured Products</h2>
        <span>Select from the premium products brands and save money</span>
    </div>
    <div class="row container">
        <div class="swiper-container slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @foreach($products as $product)
                        
                    @if($product->price >= 10 && $product->price < 20)    
                    <div class="product">
                        <div class="img-container">
                            @if($product->imagePath != null)
                                <img src="{{getImageUrl($product->imagePath)}}" alt="">
                             @endif
                            <div class="addCart">
                                <a href="{{route("user.cart.store", ['id' => $product->id])}}" method="post"><i class="fas fa-shopping-cart"></i></a> 
                            </div>
                            <ul class="side-icons">
                                {{-- <span>
                                    <a href="{{route("", ['id' => $product->id, 'quantity' => "1"])}}"><i class="fas fa-search"></i></a> 
                                </span> --}}
                                <span>
                                    <i class="far fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fas fa-sliders-h"></i>
                                </span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="productDetails.html">$product->name</a>
                            <div class="price">
                                <span>$product->price</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!--Carousel Navigation-->
    <div class="arrows d-flex">
        <div class="custom-prev d-flex">
            <i class="bx bx-chevrons-left swiper-icon"></i>
    </div>
    <div class="custom-next d-flex">
        <i class="bx bx-chevrons-right swiper-icon"></i>
    </div>
</div>
</section>
<!--New Products-->
<section class="section products">
<div class="title">
    <h2>New Products</h2>
    <span>Select from the premium product brands and save money</span>
</div>
<div class="product-layout">
    @foreach($products as $product)   
    <div class="product">
        <div class="img-container">
            @if($product->imagePath != null)
                <img src="{{getImageUrl($product->imagePath)}}" alt="">
            @endif
            <div class="addCart">
                <a href="{{route("user.cart.store", ['id' => $product->id])}}" method="post"><i class="fas fa-shopping-cart"></i></a> 
            </div>
            
            <ul class="side-icons">
                {{-- <span>
                    <a href="{{route("productInfo", ['id' => $product->id])}}" ><i class="fas fa-search"></i></a> 
                </span> --}}
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">$product->name</a>
            <div class="price">
                <span>$product->price</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
</section>
<!--Advert-->
<section class="section advert">
<div class="advert-layout container">
    <div class="item">
        <img src="./images/banner1.jpg" alt="">
        <div class="content left">
            <span>Fresh Produce Everyday!</span>
            <h3>Farm Fresh Products</h3>
            <a href="{{route("list")}}">View Collections</a>
        </div>
    </div>
    <div class="item">
        <img src="./images/banner2.jpg" alt="">
        <div class="content right">
            <span>New Trending</span>
            <h3>Tastes like a Nectar!</h3>
            <a href="{{route("list")}}">Shop Now</a>
        </div>
    </div>
</div>
</section>
<!--BRANDS-->
<section class="section brands">
<div class="container">
    <div class="title">
        <h2>Shop by Brand</h2>
        <span>Select from the premium product brands and save plenty of Money</span>
    </div>
    <div class="brand-layout container">
        <div class="swiper-container slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/brand1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand3.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand4.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand5.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand6.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./images/brand7.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection