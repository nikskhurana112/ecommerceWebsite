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
                <img src="./images/hero-2.png" alt="">
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

<section class="section promotion">
<div class="container">
    <div class="title">
        <h2>Shop Collection</h2>
        <span>Select from the premium product and save plenty of money</span>
    </div>
    <div class="promotion-layout container">
        <div class="col-4">
        <div class="promotion-item">
            <img src="./images/promo1.jpg" alt="">
            <div class="promotion-content">
                <h3>JUICE</h3>
                <a href="">SHOP NOW</a>
            </div>
        </div>
        </div>
        <div class="col-4">
            <div class="promotion-item">
                <img src="./images/promo2.jpg" alt="">
                <div class="promotion-content">
                    <h3>MANGO</h3>
                    <a href="">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div class="col-4">
        <div class="promotion-item">
            <img src="./images/promo3.jpg" alt="">
            <div class="promotion-content">
                <h3>GRAPES</h3>
                <a href="">SHOP NOW</a>
            </div>
        </div>
        </div>
        <div class="col-4">
        <div class="promotion-item">
            <img src="./images/promo4.jpg" alt="">
            <div class="promotion-content">
                <h3>PLUM</h3>
                <a href="">SHOP NOW</a>
            </div>
        </div>
        </div>
        <div class="col-4">
        <div class="promotion-item">
            <img src="./images/promo5.jpg" alt="">
            <div class="promotion-content">
                <h3>ORANGE</h3>
                <a href="">SHOP NOW</a>
            </div>
        </div>
        </div>
        <div class="col-4">
            <div class="promotion-item">
                <img src="./images/promo6.jpg" alt="">
                <div class="promotion-content">
                    <h3>PINEAPPLE</h3>
                    <a href="">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-1.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <ul class="side-icons">
                                <span>
                                    <i class="fas fa-search"></i>
                                </span>
                                <span>
                                    <i class="far fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fas fa-sliders-h"></i>
                                </span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="productDetails.html">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-8.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-10.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-7.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-6.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-5.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-1.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product">
                        <div class="img-container">
                            <img src="./images/product-10.jpg" alt="">
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
    
                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a href="">Bambi Print Mini Backpack</a>
                            <div class="price">
                                <span>$150</span>
                            </div>
                        </div>
                    </div>
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
    <div class="product">
        <div class="img-container">
            <img src="./images/product-9.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-1.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
                <span class="cancel">$160</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-2.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-4.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
                <span class="cancel">$160</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-5.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-6.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-7.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
                <span class="cancel">$160</span>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="img-container">
            <img src="./images/product-8.jpg" alt="">
            <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
            </div>

            <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
            </ul>
        </div>
        <div class="bottom">
            <a href="">Bambi Print Mini Backpack</a>
            <div class="price">
                <span>$150</span>
                <span class="cancel">$160</span>
            </div>
        </div>
    </div>
</div>
</section>
<!--Advert-->
<section class="section advert">
<div class="advert-layout container">
    <div class="item">
        <img src="./images/banner1.jpg" alt="">
        <div class="content left">
            <span>Elusive Sales</span>
            <h3>Spring Collections</h3>
            <a href="">View Collection</a>
        </div>
    </div>
    <div class="item">
        <img src="./images/banner2.jpg" alt="">
        <div class="content right">
            <span>New Trending</span>
            <h3>Designer Bags</h3>
            <a href="">Shop Now</a>
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
<!--Footer-->
<footer id="footer" class="section footer">
<div class="container">
    <div class="footer-container">
        <div class="footer-center">
            <h3>EXTRAS</h3>
            <a href="">Brands</a>
            <a href="">Gift Certificates</a>
            <a href="">Affiliate</a>
            <a href="">Specials</a>
            <a href="">Site Map</a>
        </div>
        <div class="footer-center">
            <h3>INFORMATION</h3>
            <a href="">About Us</a>
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">Contact Us</a>
            <a href="">Site Map</a>
        </div>
        <div class="footer-center">
            <h3>MY ACCOUNT</h3>
            <a href="">My Account</a>
            <a href="">Order History</a>
            <a href="">Wish List</a>
            <a href="">Newsletter</a>
            <a href="">Returns</a>
        </div>
        <div class="footer-center">
            <h3>CONTACT US</h3>
            <div>
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, USA
            </div>
            <div>
                <span>
                    <i class="far fa-envelope"></i>
                </span>
                company@gmail.com
            </div>
            <div>
                <span>
                    <i class="fas fa-phone"></i>
                </span>
                456-456-4512
            </div>
            <div class="payment-methods">
                <img src="./images/payment.png" alt="">
            </div>

        </div>
    </div>
</div>
</footer>

@endsection