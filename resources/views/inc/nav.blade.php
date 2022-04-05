{{-- Navigation Bar --}}
<header>
  <div class="container">
      <div class="col-2 logo">
          <a href="{{route("/")}}">
              <img src="images/logo.png" alt="">
          </a>
      </div>
      <div class="col-4">
        <form action="#" class="search">
            <input type="text" placeholder="Search.." name="search">
             <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="col-6">
        <nav class="navbar">
            
            <ul class="nav-list">
                    
                <li><a href="{{route("list")}}">Products</a></li>
                <li class="has-dropdown"><a href="">Shop on Variety <i class="fas fa-chevron-down"></i></a>
                    <div class="mega-box">
                        <div class="col-3">
                            <div class="row">
                                <img src="./images/nav.png" width="100%" alt="">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Veggies</div>
                                <ul class="mega-links">
                                    <li><a href="#">Leafy green</a></li>
                                    <li><a href="#">Cruciferous</a></li>
                                    <li><a href="#">Marrow</a></li>
                                    <li><a href="#">Root</a></li>
                                    <li><a href="#">Edible plant stem</a></li>
                                    <li><a href="#">Allium</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Fruits</div>
                                <ul class="mega-links">
                                    <li><a href="#">Apples and pears</a></li>
                                    <li><a href="#">Citrus</a></li>
                                    <li><a href="#">Stone fruit</a></li>
                                    <li><a href="#">Tropical and exotic</a></li>
                                    <li><a href="#">Berries</a></li>
                                    <li><a href="#">Melons</a></li>
                                    <li><a href="#">Tomatoes and avocados.</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Juices</div>
                                <ul class="mega-links">
                                    <li><a href="#">Clear</a></li>
                                    <li><a href="#">Citrus</a></li>
                                    <li><a href="#">Tropical</a></li>
                                    <li><a href="#">Fruit Nectar</a></li>
                                    <li><a href="#">Fruit Punches & Drinks</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li><a href="#">Blog</a></li>
                <li class="has-dropdown">
                    <a href="#">About Us <i class="fas fa-chevron-down"></i></a>
                    <ul class="drop-menu">
                        <li><a href="#">About our Website</a></li>
                        <li><a href="#">About our Products</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Contact Us <i class="fas fa-chevron-down"></i></a>
                    <ul class="drop-menu">
                        <li><a href="#">North of India</a></li>
                        <li><a href="#">South of India</a></li>
                        <li><a href="#">West of India</a></li>
                        <li><a href="#">East of India</a></li>
                    </ul>
                </li> --}}
                @if(Auth::check() == false)
                <li class="has-dropdown"><a href="{{route("login")}}">Login <i class="fas fa-chevron-down"></i></a>
                    <ul class="drop-menu">
                        <li><a href="{{route("register")}}">Sign Up</a></li>
                        <li><a href="{{route("login")}}">My Profile</a></li>
                        <li><a href="{{route("login")}}">Orders</a></li>
                        <li><a href="{{route("login")}}">Wishlist</a></li>
                    </ul>
                </li>
                <ul class="icons">
                    <li class="cart">
                        <a href="{{route("login")}}">
                            <img class="cart" src="./images/shoppingBag.svg" alt="">
                            <span>0</span>
                        </a>
                    </li>
                </ul>
            
                @elseif(Auth::check() == true && Auth::user()->is_admin)
                <li class="has-dropdown"><a href="">Controls <i class="fas fa-chevron-down"></i></a>
                    <div class="mega-box">
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Add</div>
                                <ul class="mega-links">
                                    <li><a href="{{route("admin.product.add")}}">Add Products</a></li>
                                    <li><a href="{{route("admin.product.upload_data")}}">Upload Products (Excel Sheet)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Download</div>
                                <ul class="mega-links">
                                    <li><a href="{{route("admin.product.download_data")}}">Download Excel Sheet Products</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Update</div>
                                <ul class="mega-links">
                                    <li><a href="{{route("admin.product.update_product")}}">Update Existing Products</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="row-head">Orders</div>
                                <ul class="mega-links">
                                    <li><a href="{{route("admin.order.orders_list")}}">Orders List</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                
                
                
                <li class="has-dropdown"> <a href="#">Hello!  {{Auth::user()->full_name}} <i class="fas fa-chevron-down"></i></a>
                    <ul class="drop-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="{{route("user.logout")}}">Log-Out</a></li>
                    </ul>
                </li>
                <ul class="icons">
                    <li class="cart">
                        <a href="{{route("user.product.cart")}}">
                            <img class="cart" src="./images/shoppingBag.svg" alt="">
                            <span>{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                        </a>
                    </li>
                </ul>
                @else
                <li class="has-dropdown"> <a href="">Hello! {{Auth::user()->full_name}} <i class="fas fa-chevron-down"></i></a>
                    <ul class="drop-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="{{route("user.logout")}}">Log-Out</a></li>
                    </ul>
                </li>
                <ul class="icons">
                    <li class="cart">
                        <a href="{{route("user.product.cart")}}">
                            <img class="cart" src="./images/shoppingBag.svg" alt="">
                            <span>0</span>
                        </a>
                    </li>
                </ul>
                
            @endif
            </ul>
        </nav>
    </div>
</div>  
</header>


